<?php
header("Content-Type: text/html; charset=utf-8",true);
/**Valdecir:09/07/2008:Mudança para Oracle*/
/**Valdecir:14/07/2008:Modificado para pasta principal e alteração para Identificado*/
//require ("_caminho.php");
//require ("../../controle_acesso/valida.php");
require ("../../intranet/admin/conexao_postgre.php");

require ("validaIdentificado.php");

include ("../../intranet/licitacao/header.php");
?>

<html>
<head>
<link href="../example.css" media="all" rel="stylesheet" type="text/css" />
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body>

<?php
//Variaveis das consultas de com filtors
//$cod_empresa = $cod_empresa;
$cd_empresa = $_SESSION["cd_empresa"];

//Teste
//echo $cod_empresa;
//echo "<br><br>";

//buscar data do servidor para usar na select
//montar data de insersao - data no servidor
$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
$dia = gmdate("d", $data_servidor);
$mes = gmdate("m", $data_servidor);
$ano = gmdate("Y", $data_servidor);
$data_atual = $dia."/".$mes."/".$ano;

  //carregar os dados da empresa
	$sql_empresa = "select * from edital.empresas where cd_empresa='".$cd_empresa."'";
	$stmt = pg_query($conexao_postgre, $sql_empresa);
	//ociexecute($stmt);
	$cont = pg_num_rows($stmt);
	//oci_free_statement ($stmt);
	$stmt = pg_query($conexao_postgre, $sql_empresa);
	//ociexecute($stmt);

  //$result = mysql_query($sql_empresa) or die ("Erro no SQL de Seleção Empresa");
  //Teste
  //echo "<br>";
  //echo $sql_empresa;
  
  while ($empresa = pg_fetch_array ($stmt))
  {
    $cd_empresa = $empresa["cd_empresa"];
    $nm_razao_social = $empresa["nm_razao_social"];
    $nm_fantasia = $empresa["nm_fantasia"];
    $dt_insercao = $empresa["dt_insercao"];
    $nm_endereco = $empresa["nm_endereco"];
    $nr_endereco = $empresa["nr_endereco"];
    $nm_bairro = $empresa["nm_bairro"];
    $nr_cep = $empresa["nr_cep"];
    $nm_cidade = $empresa["nm_cidade"];
    $nm_estado = $empresa["nm_estado"];
    $nr_telefone = $empresa["nr_telefone"];
    $nr_fax = $empresa["nr_fax"];
    $nm_e_mail = $empresa["nm_e_mail"];
    $nm_contato = $empresa["nm_contato"];
    $nm_login = $empresa["nm_login"];
    $nm_senha = $empresa["nm_senha"];
    $st_ativo = $empresa["st_ativo"];
  }

//Usar nas consultas de com filtors
$sql = "select Emp.cd_empresa,
			   E.nr_registro,
			   e.cd_entidade,
               Emp.nr_edital, 
               Emp.nr_ano,
               t.ds_entidade,
               m.ds_modalidade,
               E.nm_edital,
               Emp.st_liberado
          from edital_controle_empresas Emp,
	           edital_editais E,
	           edital_entidades t,
	           edital_modalidades m
         where Emp.nr_edital = E.cd_edital
				 	 and E.cd_entidade = t.cd_entidade
           and E.cd_modalidade = m.cd_modalidade
           and Emp.cd_empresa= '".$cd_empresa."'
           and Emp.st_liberado='S'
         order by Emp.nr_ano, Emp.nr_edital";
		 
	$stmt = pg_query($conexao_postgre, $sql);
	//ociexecute($stmt);
	$cont = pg_num_rows($stmt);
	//oci_free_statement ($stmt);
	$stmt = pg_query($conexao_postgre, $sql);
	//ociexecute($stmt);
  
if($cont < 1)
{
  echo "<table width=\"600\" align='center'>
        <tr>
		  <td align=\"center\">
		    <font face=\"verdana\" size=\"2\" color=\"#000000\">
		      Não há edital liberado para esta empresa.</font><br>
			<font face=\"verdana\" size=\"2\" color=\"#008000\">
			  <a href=index_edital.php>Voltar</a>
			</font>
		  </td>
		</tr>
		</table>"; 
}
else
{   
  echo "<table border=\"0\" align=\"center\" cellspacing=\"1\">";
  echo "<tr>
		  <td colspan=\"6\">&nbsp;</td>
		</tr>
        <tr>
          <td colspan=\"6\" align=\"center\"><b><font size=\"3\" color=\"#008000\">Relação de editais liberados</font></b></td>  
        </tr>
		<tr>
		  <td colspan=\"6\">&nbsp;</td>
		</tr>
		<tr>
		  <td colspan=\"6\"><font size=\"2\"><b>Dados da Empresa:</b></font></td>
		</tr>		
		<tr>
		  <td colspan=\"6\"><font size=\"2\"><b>Razão Social:</b> $nm_razao_social</font></td>
		</tr>
		<tr>
		  <td colspan=\"6\"><font size=\"2\"><b>Nome Fantasia:</b> $nm_fantasia</font></td>
		</tr>	
		<tr>
		  <td colspan=\"6\"><font size=\"2\"><b>Cidade:</b> $nm_cidade</font></td>
		</tr>
		<tr>
		  <td colspan=\"6\"><font size=\"2\"><b>Estado:</b> $nm_estado</font></td>
		</tr>			
		<tr>
		  <td colspan=\"6\">&nbsp;</td>
		</tr>				
		<tr>
		  <td colspan=\"6\"><font size=\"2\">Total de editais liberados: $cont</font></td>
		</tr>
        <tr>
		  <td align=\"center\" width=\"70\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Número</font></b></td>
		  <td align=\"center\" width=\"70\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Ano</font></b></td>
		  <td align=\"left\" width=\"160\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Entidade</font></b></td>
          <td align=\"left\" width=\"160\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Modalidade</font></b></td>
		  <td align=\"center\" width=\"60\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Nome do Arquivo</font></b></td>
		  <td align=\"center\" width=\"80\" bgcolor=\"#86CAA1\"><b><font size=\"2\" color=\"#FFFFFF\">Download</font></b></td>
		</tr>";
  while($linha = pg_fetch_array ($stmt))
  {
    echo "<tr>";
    echo "<td align=\"center\" bgcolor=\"#E7E7E7\"><font size=\"2\" color=\"#000000\">".$linha['CD_EDITAL']."</font></td>";
	echo "<td align=\"center\" bgcolor=\"#E7E7E7\"><font size=\"2\" color=\"#000000\">".$linha['NR_ANO']."</font></td>";
	echo "<td align=\"left\" bgcolor=\"#E7E7E7\"><font size=\"2\" color=\"#000000\">".$linha['DS_ENTIDADE']."</font></td>";
	echo "<td align=\"left\" bgcolor=\"#E7E7E7\"><font size=\"2\" color=\"#000000\">".$linha['DS_MODALIDADE']."</font></td>";
	echo "<td align=\"left\" bgcolor=\"#E7E7E7\"><font size=\"2\" color=\"#000000\">".$linha['NM_EDITAL']."</font></a></td>"; 
	$identificacao = base64_encode("1".$linha['NR_REGISTRO']);//1=Download de Proposta
	$empresa = base64_encode($_SESSION['cd_empresa']);//Código da empresa logada
   echo "<td align=\"center\" bgcolor=\"#E7E7E7\"><a href='download.php?id=$identificacao&num=$empresa' target=\"_blank\"><font size=\"2\" color=\"#000000\">Download</font></a></td>";

	echo "</tr>";
  }
  
echo "<tr>";
echo "<td colspan=\"5\">&nbsp;</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=\"5\"><font size=\"2\"><a href=logoutIdentificado.php>Sair do Acesso Identificado<a></font></td>";
echo "</tr>";  
}  
include ("../../intranet/licitacao/bottom.php");
?>
