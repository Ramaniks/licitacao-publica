<?php
header("Content-Type: text/html; charset=utf-8",true);

//require ("_caminho.php");
//require ("../admin/conexao_oracle_controleacesso_utf.php");
$db_url = "dbname= portal2009 port=5432 host = localhost user = portal2009 password = Portal2009";
$conexao_postgre = pg_connect($db_url);

//$conexao_postgre = oci_connect("ADMCAI", "CAI", "192.168.1.123:1527/ORCL", "AL32UTF8");

$identificacao = base64_decode($_GET["id"]);
$tipo_download = substr($identificacao,0,1);
$identificacao = substr($identificacao,1,strlen($identificacao));
if (isset($_GET["num"])) {
	$cod_empresa =  base64_decode($_GET["num"]);
}

$VAR_PATH_UPLOAD       = "/var/www/htdocs/servicosPublicos/licitacao/"; //ex: "d:/www/pasta/"

if ($tipo_download == "1") {
	$sql = "select cd_edital, nr_ano, lk_edital, tp_edital, nm_edital, dst_edital_pago from edital.editais where nr_registro= $identificacao";//NR_TAMANHO_EDITAL,
	$stmt_edital= ociparse($conexao_postgre, $sql);
	ociexecute($stmt_edital);
	$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);
	$cd_edital		= $row_edital["cd_edital"];
	$nr_ano			= $row_edital["nr_ano"];
	$st_edital_pago		= $row_edital["dst_edital_pago"];
	
	//echo $tipo_download;
	//echo $row_edital." - ".$cd_edital." - ".$nr_ano." - ".$st_edital_pago;
	$download_liberado = "S"; //Sempre baixa o arquivo de download
	//Validação para verificar se o edital que a empresa esta baixando é o que foi liberado para ela.
	if ($st_edital_pago == "S"){
		$sql_empresa = "SELECT 'S' achou FROM edital.controle_empresas WHERE nr_edital= $cd_edital AND nr_ano = $nr_ano";
		if (!is_null($cod_empresa))
			{$sql_empresa = $sql_empresa. "  AND cd_empresa = $cod_empresa";}
		else
			{$sql_empresa = $sql_empresa. "  AND cd_empresa = null";}
		$stmt_empresa= ociparse($conexao_postgre, $sql_empresa);
		ociexecute($stmt_empresa);
		$row_empresa= oci_fetch_array($stmt_empresa, OCI_BOTH);
		if (is_null($row_empresa["achou"])) {$download_liberado = "N";}
	}
	if ($download_liberado == "S") {
		$lk_edital		= $row_edital["lk_edital"];
		$nm_edital		= $row_edital["nm_edital"];
		$tp_edital		= $row_edital["tp_edital"];

		$edital_tamanho = filesize($VAR_PATH_UPLOAD.$lk_edital);
		header("Content-Type: $tp_edital");
		header("Content-Length: $edital_tamanho");
		$nome_arquivo = "Content-Disposition: attachment; filename=\"$nm_edital\"; size=$edital_tamanho";
		header($nome_arquivo);
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		//echo " * ".$tp_edital." - ".$VAR_PATH_UPLOAD.$lk_edital." * ".$edital_tamanho." - ".$nm_edital." - ".$nome_arquivo;
		$resultado = readfile("$VAR_PATH_UPLOAD$lk_edital");
		if ($resultado == false) {
			echo "<script>";
			echo "alert('Erro no download. Favor tentar de novo mais tarde.')";
			echo "</script>";
		}
		exit;
	}
} else {
	$sql = "select lk_proposta, tp_proposta, nr_tamanho_proposta, nm_proposta from edital.editais where nr_registro= $identificacao";
	$stmt_edital= ociparse($conexao_postgre, $sql);
	ociexecute($stmt_edital);
	$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);
	
	$lk_proposta		= $row_edital["lk_proposta"];
	$nm_proposta		= $row_edital["nm_proposta"];
	$tp_proposta		= $row_edital["tp_proposta"];
	$nr_tamanho_proposta	= $row_edital["nr_tamanho_proposta"];
	
	header("Content-Type: $tp_proposta");
	header("Content-Length: $nr_tamanho_proposta");
	header("Content-Disposition: attachment; filename=\"$nm_proposta\"; size=$nr_tamanho_proposta");
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	$resultado = readfile("$VAR_PATH_UPLOAD$lk_proposta");
	if ($resultado == false) {
		echo "<script>";
		echo "alert('Erro no download. Favor tentar de novo mais tarde.')";
		echo "</script>";
	}
	exit;
}
?>