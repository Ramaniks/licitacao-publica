<?php

header("Content-Type: text/html; charset=utf-8",true);



//require ("_caminho.php");

//require ("../admin/conexao_oracle_controleacesso_utf.php");

$conexao_controle_acesso = oci_connect("ADMCAI", "CAI", "192.168.1.123:1527/ORCL", "AL32UTF8");



$identificacao = base64_decode($_GET["id"]);

$tipo_download = substr($identificacao,0,1);

$identificacao = substr($identificacao,1,strlen($identificacao));

if (isset($_GET["num"])) {

	$cod_empresa =  base64_decode($_GET["num"]);

}



$VAR_PATH_UPLOAD       = "/var/www/htdocs/servicosPublicos/licitacao/"; //ex: "d:/www/pasta/"



if ($tipo_download == "1") {

	$sql = "select CD_EDITAL, NR_ANO, LK_EDITAL, TP_EDITAL, NM_EDITAL, ST_EDITAL_PAGO from EDITAL_EDITAIS where NR_REGISTRO= $identificacao";//NR_TAMANHO_EDITAL,

	$stmt_edital= ociparse($conexao_controle_acesso, $sql);

	ociexecute($stmt_edital);

	$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);

	$cd_edital		= $row_edital["CD_EDITAL"];

	$nr_ano			= $row_edital["NR_ANO"];

	$st_edital_pago		= $row_edital["ST_EDITAL_PAGO"];
	
	//echo $tipo_download;
	//echo $row_edital." - ".$cd_edital." - ".$nr_ano." - ".$st_edital_pago;

	$download_liberado = "S"; //Sempre baixa o arquivo de download

	//Validação para verificar se o edital que a empresa esta baixando é o que foi liberado para ela.

	if ($st_edital_pago == "S"){

		$sql_empresa = "SELECT 'S' ACHOU FROM EDITAL_CONTROLE_EMPRESAS WHERE NR_EDITAL= $cd_edital AND NR_ANO = $nr_ano";

		if (!is_null($cod_empresa))

			{$sql_empresa = $sql_empresa. "  AND CD_EMPRESA = $cod_empresa";}

		else

			{$sql_empresa = $sql_empresa. "  AND CD_EMPRESA = null";}

		$stmt_empresa= ociparse($conexao_controle_acesso, $sql_empresa);

		ociexecute($stmt_empresa);

		$row_empresa= oci_fetch_array($stmt_empresa, OCI_BOTH);

		if (is_null($row_empresa["ACHOU"])) {$download_liberado = "N";}

	}

	if ($download_liberado == "S") {

		$lk_edital		= $row_edital["LK_EDITAL"];

		$nm_edital		= $row_edital["NM_EDITAL"];

		$tp_edital		= $row_edital["TP_EDITAL"];



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

}

else

{

	$sql = "select LK_PROPOSTA, TP_PROPOSTA, NR_TAMANHO_PROPOSTA, NM_PROPOSTA from EDITAL_EDITAIS where NR_REGISTRO= $identificacao";

	$stmt_edital= ociparse($conexao_controle_acesso, $sql);

	ociexecute($stmt_edital);

	$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);

	

	$lk_proposta		= $row_edital["LK_PROPOSTA"];

	$nm_proposta		= $row_edital["NM_PROPOSTA"];

	$tp_proposta		= $row_edital["TP_PROPOSTA"];

	$nr_tamanho_proposta	= $row_edital["NR_TAMANHO_PROPOSTA"];

	

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