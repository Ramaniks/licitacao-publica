<?php
header("Content-Type: text/html; charset=utf-8",true);
/**Valdecir:09/07/2008:Mudança para o Oracle*/
/**Valdecir:14/07/2008:Modificado para pasta principal e alteração para Identificado*/
?>
<?php
//abrir a sessão
session_start();

//include ("conexao.php");
//require ("_caminho.php");
require ("../../intranet/admin/conexao_postgre.php");

//obtem os dados
$login = $_POST["login"];
$senha = md5(trim($_POST["senha"]));

//instrução SQL
//$declar = "select * from empresa where login = '$login'";
//$result = mysql_query($declar) or die ("Erro no SQL de Empresa");

//instrução SQL
$sql = "SELECT * FROM edital.empresas WHERE nm_login = '$login'";
$stmt = pg_query($conexao_postgre, $sql);
//ociexecute($stmt);
$cont = pg_num_rows($stmt);
//oci_free_statement ($stmt);
$stmt = pg_query($conexao_postgre, $sql);
//ociexecute($stmt);

if ($cont < 1)
{
  echo "<br><br><br><br>";
  echo "<center>";
  echo "Usuário NÃO cadastrado...  ";
  echo "<a href=loginIdentificado.php>Voltar</a>";
  echo "</center>";
}
else
{
  while($linha = pg_fetch_array ($stmt))
  {
  	$senha_lida = $linha["nm_senha"];
    if($senha = $senha_lida)
	{
	   $_SESSION["cd_empresa"] = $linha["cd_empresa"];
	   //$_SESSION["cod_empresa1"] = $linha["COD_EMPRESA"];//Para o Download
	   $_SESSION["nm_login"] = $linha["nm_login"];
	   //header ("Location:edital_empresa.php?cod_empresa=$cod_empresa");
	   //Teste
	   //echo "cod_empresa: ";
	   //echo $cod_empresa;
	   //echo "<br><br><br><br>";
       //echo "<center>";
	   //echo "<br>";
	   //echo "Seu login foi realizado com sucesso.";
	   //echo "<br>";
	   //echo "Você esta liberado para usar o sistema";
	   //echo "<br><br>";
	   //include("editalIdentificado.php");
	   header("Location:editalIdentificado.php");
       //echo "<a href=\"editalIdentificado.php?cod_empresa=$cod_empresa/>";
	   //echo "</center>";
	}
	else
	{
	    echo "<br><br><br><br>";
        echo "<center>";
        echo "Senha INVÁLIDA !!...  ";
        echo "<a href=loginIdentificado.php>Voltar</a>";
		echo "</center>";
	}
  }
}

?>
