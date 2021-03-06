<?php
header("Content-Type: text/html; charset=UTF-8",true);

$ip = $_SERVER["REMOTE_ADDR"];
require ("../../intranet/admin/conexao_oracle_controleacesso_utf.php");
require ("../../intranet/licitacao/header.php");


?>

<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" link="#008000" vlink="#008000" alink="#666666">
<table  border="0" cellpadding="0" cellspacing="2" width='800' align='center'>
<?php
$cd_entidade = $_GET["cd_entidade"];

//buscar data do servidor para usar na select
//montar data de insersao - data no servidor
$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
$dia = gmdate("d", $data_servidor);
$mes = gmdate("m", $data_servidor);
$nr_ano = gmdate("Y", $data_servidor);
//$data_atual = $nr_ano."-".$mes."-".$dia;
$data_atual = $dia."/".$mes."/".$nr_ano;
//--------------------Inicio do Cabecalho padrão.-------------------------------------

	//Exibir a descrição do entidade
	$monta_sql_entidade = "SELECT DS_ENTIDADE FROM EDITAL_ENTIDADES WHERE CD_ENTIDADE=".$cd_entidade;
	//echo $monta_sql_entidade;
	$stmt_entidade = ociparse($conexao_controle_acesso, $monta_sql_entidade);
	ociexecute($stmt_entidade);
	$row_entidade = oci_fetch_array($stmt_entidade, OCI_BOTH);
	$ds_entidade = $row_entidade["DS_ENTIDADE"];
	
	echo "<tr>";
	echo "<td><b>Entidade $ds_entidade</b><br>";
	echo "</td>";
	echo "</tr>";
/*	echo "Entidade <b>"; 
	echo $ds_entidade;*/
//--------------------Fim do Cabecalho padrão.-------------------------------------

//--------------------Inicio do Resultado do Edital--------------------------------
//Realizar a busca dos resultados
$monta_sql = "select EDITAL_EDITAIS.CD_EDITAL, EDITAL_EDITAIS.NR_Ano, EDITAL_EDITAIS.cd_modalidade, EDITAL_EDITAIS.Cd_Entidade,
					 EDITAL_RESULTADOS.DS_OBJETO,
					  NM_CLASSIFICACAO,
					  NR_TAMANHO_CLASSIFICACAO,
					  TP_CLASSIFICACAO,
					  LK_CLASSIFICACAO,
					  NM_HABILITACAO,
					  NR_TAMANHO_HABILITACAO,
					  TP_HABILITACAO,
					  LK_HABILITACAO
						from EDITAL_RESULTADOS
			    inner join EDITAL_EDITAIS on EDITAL_EDITAIS.NR_REGISTRO = EDITAL_RESULTADOS.NR_EDITAL
              where CD_ENTIDADE='".$cd_entidade."'
			    and TO_DATE(DT_INICIO, 'DD/MM/RRRR')<=TO_DATE('".$data_atual."', 'DD/MM/RRRR') 
			    and TO_DATE(DT_FIM, 'DD/MM/RRRR')>=TO_DATE('".$data_atual."', 'DD/MM/RRRR')   
		      order by CD_MODALIDADE, DT_INICIO, NR_EDITAL";
$stmt_resultado = oci_parse($conexao_controle_acesso, $monta_sql);
oci_execute($stmt_resultado);
?>

<?php
$i = 0;
$cd_modalidade_atual = -1;
while($row_lido = oci_fetch_array ($stmt_resultado, OCI_BOTH)) {

   $cd_edital = $row_lido["CD_EDITAL"];
   $nr_ano = $row_lido["NR_NR_ANO"];
   $cd_modalidade = $row_lido["CD_MODALIDADE"];
   $cd_entidade = $row_lido["CD_ENTIDADE"];
   $ds_objeto = $row_lido['DS_OBJETO']->load();
   $nm_classificacao = $row_lido["NM_CLASSIFICACAO"];
   $nm_habilitacao = $row_lido["NM_HABILITACAO"];

  if ($cd_modalidade_atual <> $cd_modalidade) {

	//Exibir a descrição da modalidade 
	$ds_modalidade = "Resultado de Edital";
	echo "<tr>";
	echo "<td><br>";
	echo "</td>";
	echo "</tr>";
  
	echo "<tr>";
	echo "<td bgcolor=\"#86CAA1\">";
	echo "<div align=\"center\"><b>"; 
	echo $ds_modalidade;
	echo "</b></div>";
	echo "</td>";
	echo "</tr>";
	$cd_modalidade_atual = $cd_modalidade;
  }

	if(($i % 2) == 1) $fundo="#F3F3F3";
	else $fundo="#CEEAD9";

	echo "<tr>";
	echo "<td bgcolor=\"$fundo\">";
	echo "  <div align=\"justify\"><font face=\"Verdana\" size=\"1\">";

  echo "<br>";
  echo "<b>Edital: </b>";
  echo $cd_edital;//row_lido["CD_EDITAL"];
  echo "/";   
  echo $nr_ano;//row_lido["NR_ANO"];
  echo "&nbsp;&nbsp;&nbsp;";
  echo "<b>Data/Hora Abertura: </b>";
  echo $dt_abertura;//row_lido["DATA_ABERTURA"];
  echo "&nbsp;";
  echo $hr_abertura;//row_lido["HORA_ABERTURA"];
  echo "<font face=\"verdana\" size=\"1\">hs</font>";
  echo "<br>";
  echo "<b>Objeto: </b>";
  print $ds_objeto;
//  echo /*"objeto"*/$row_lido["OBJETO"];
  //Caso não exista arquivo de edital
  if($nm_classificacao != ""){
    echo "<br>";
    echo "<br>";  
    //Para casos de editais pagos e não pagos
    if ($edital_pago == 'S') {
	  echo "<img src=\"../../imagem/file_locked.png\" width=\"18\" height=\"18\">";
      echo "&nbsp;";
      echo $edital_nome;
      echo "&nbsp;";
      echo "(<a href=\"restrito_empresa/acesso_emp.php\">Acesso Identificado</a>)";
    }
    if ($edital_pago == 'N') {
	  echo "<img src=\"../../imagem/icon_pdf.gif\" width=\"16\" height=\"16\">";
      echo "&nbsp;";
      echo $edital_nome;
      echo "&nbsp;";
      echo "(<a href=\"formulario_solicitacao.php?nr_registro=$nr_registro\">Edital</a>)";
    }
  }	
  //Caso exista arquivo para download da proposta
  if($nm_proposta != ""){
    echo "<br>";
	echo "<br>";
	echo "<img src=\"../../imagem/bt_salvar.gif\" width=\"18\" height=\"18\">";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
    echo "&nbsp;<a href='download_proposta.php?nr_registro=$nr_registro' target=\"_blank\">Proposta</a>";
  }
  
  if ($cancelado == 'S') {
  	echo " <font color='#ff0000'>OBS: $nm_modalidade CANCELADO(A).</font>";
  }

	echo "  </font></div></td>";
	echo "</tr>";
	$i++;
}

//--------------------Fim do Resultado do Edital-----------------------------------

//--------------------Inicio de Publicação do Edital-------------------------------
//Realizar a busca dos editais
$monta_sql = "select
                NR_REGISTRO,
                CD_EDITAL,
				NR_ANO,
				DT_ABERTURA,
				HR_ABERTURA,
				CD_ENTIDADE,
				EDITAL_EDITAIS.CD_MODALIDADE,
				(SELECT UPPER(DS_MODALIDADE) FROM EDITAL_MODALIDADES WHERE CD_MODALIDADE = EDITAL_EDITAIS.CD_MODALIDADE) NM_MODALIDADE,
				DS_OBJETO,
				NM_EDITAL,
				LK_EDITAL,
				NM_PROPOSTA,
				LK_PROPOSTA,				
				ST_EDITAL_PAGO,
				ST_CANCELADO
			  from EDITAL_EDITAIS
				inner join EDITAL_MODALIDADES ON EDITAL_MODALIDADES.CD_MODALIDADE = EDITAL_EDITAIS.CD_MODALIDADE
              where CD_ENTIDADE='".$cd_entidade."'
			    and TO_DATE(DT_FIM_DISPONIVEL, 'DD/MM/RRRR')>=TO_DATE('".$data_atual."', 'DD/MM/RRRR')   
					and ST_CANCELADO <> 'S'
					and ST_SUSPENSO = 'N'
		      order by EDITAL_MODALIDADES.NR_ORDENACAO, EDITAL_EDITAIS.CD_MODALIDADE, DT_ABERTURA, CD_EDITAL";
//			  echo $monta_sql;
$stmt_edital = oci_parse($conexao_controle_acesso, $monta_sql);
oci_execute($stmt_edital);

$i = 0;
$cd_modalidade_atual = -1;
while($row_lido = oci_fetch_array ($stmt_edital, OCI_BOTH)) {

	$nr_registro = $row_lido["NR_REGISTRO"];
	$cd_edital = $row_lido["CD_EDITAL"];
	$nr_ano = $row_lido["NR_ANO"];
	
	$dt_abertura = date("d/m/Y", strtotime($row_lido["DT_ABERTURA"]));
	$hr_abertura = $row_lido["HR_ABERTURA"];
	$cd_entidade = $row_lido["CD_ENTIDADE"];
	$cd_modalidade = $row_lido["CD_MODALIDADE"];
	$nm_modalidade = $row_lido["NM_MODALIDADE"];
	if (isset ($row_lido["TP_PREGAO"])) {
		$tp_pregao = $row_lido["TP_PREGAO"];
	}
	$ds_objeto = $row_lido['DS_OBJETO']->load();
	if (isset($row_lido["NM_EDITAL"])) {
		$nm_edital = $row_lido["NM_EDITAL"];
		$lk_edital = $row_lido["LK_EDITAL"];
	} else {
		$nm_edital = '';
		$lk_edital = '';
	}
	if (isset ($row_lido["NM_PROPOSTA"])) {
		$nm_proposta = $row_lido["NM_PROPOSTA"];
	} else {
		$nm_proposta = "";
	}
	if (isset ($row_lido["LK_PROPOSTA"])) {
		$lk_proposta= $row_lido["LK_PROPOSTA"];
	} else {
		$lk_proposta = "";
	}
	$st_edital_pago = $row_lido["ST_EDITAL_PAGO"];
	$st_cancelado = $row_lido["ST_CANCELADO"];
  
  if ($cd_modalidade_atual <> $cd_modalidade) {

	//Exibir a descrição da modalidade
	$monta_sql_modalidade = "SELECT DS_MODALIDADE FROM EDITAL_MODALIDADES WHERE CD_MODALIDADE= ".$cd_modalidade;
	$stmt_modalidade = oci_parse($conexao_controle_acesso, $monta_sql_modalidade);
	oci_execute($stmt_modalidade);
	$row_modalidade = oci_fetch_array($stmt_modalidade, OCI_BOTH);
	$ds_modalidade = $row_modalidade["DS_MODALIDADE"];
	echo "<tr>";
	echo "<td><br>";
	echo "</td>";
	echo "</tr>";
  
	echo "<tr>";
	echo "<td bgcolor=\"#86CAA1\">";
	echo "<div align=\"center\">Modalidade <b>"; 
	echo $nm_modalidade;
	echo "</b></div>";
	echo "</td>";
	echo "</tr>";
	$cd_modalidade_atual = $cd_modalidade;
  }

	if(($i % 2) == 1) $fundo="#F3F3F3";
	else $fundo="#CEEAD9";

	echo "<tr>";
	echo "<td bgcolor=\"$fundo\">";
	echo "  <div align=\"justify\"><font face=\"Verdana\" size=\"1\">";

  echo "<br>";
  echo "<b>Edital: </b>";
  echo $cd_edital;
  echo "/";   
  echo $nr_ano;
  echo "&nbsp;&nbsp;&nbsp;";
  echo "<b>Data/Hora Abertura: </b>";
  echo $dt_abertura;
  echo "&nbsp;";
  echo $hr_abertura;
  echo "<font face=\"verdana\" size=\"1\">hs</font>";
  echo "<br>";
  echo "<b>Objeto: </b>";
  echo $ds_objeto;
  //Caso não exista arquivo de edital
  echo "<br>";
  echo "<br>";  
  echo "Download: ";
  if($nm_edital!= ""){
    //Para casos de editais pagos e não pagos
    if ($st_edital_pago == 'S') {
	  echo "<img src=\"imagens/file_locked.png\" width=\"18\" height=\"18\">";
      echo "&nbsp;";
      echo "<a href=\"restrito_empresa/acesso_emp.php\">Acesso Identificado</a>";
    }
    if ($st_edital_pago == 'N') {
      echo "&nbsp;";
			if (substr($ip, 0, strlen("192.168.")) != "192.168." ) {
	      echo "<a href=\"formulario_solicitacao.php?nr_registro=$nr_registro\">Edital</a>";
			} else {
				$identificacao = base64_encode("1".$nr_registro);//1=Download de Edital
				echo "<!-- nome do arquivo do edital:  ".$nm_edital."-->";
				echo "<a href='download.php?id=$identificacao' target=\"_blank\">Edital</a>"; 
	      echo "&nbsp;<a href=\"formulario_solicitacao.php?nr_registro=$nr_registro\">Baixar preenchendo a solicitação</a>";
			}
    }
  }	
  //Caso exista arquivo para download da proposta
  if($nm_proposta != ""){
	$identificacao = base64_encode("2".$nr_registro);//1=Download de Proposta
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='download.php?id=$identificacao' target=\"_blank\">Proposta</a>";
  }
  
  if ($st_cancelado == 'S') {
  	echo " <font color='#ff0000'>OBS: $nm_modalidade CANCELADO(A).</font>";
  }

	echo "  </font></div></td>";
	echo "</tr>";
	$i++;
}
//--------------------Fim de Publicação do Edital-------------------------------
echo "</table>";

echo "<br>";
require ("../../intranet/licitacao/bottom.php");
echo "</body>";
echo "</html>";
?>