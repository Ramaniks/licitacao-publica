<?php
header("Content-Type: text/html; charset=utf-8",true);

	/**********************************************************
	Rotina em php para validação e formatação de cpf e nr_cnpj
	criada por Lauro A L Brito - 14/03/2007
	**********************************************************/
	
	/*
		As funções checa_cpf() e checa_cnpj()
		foram desenvolvidas por:
		InFog (Evaldo Junior Bento)
		em Junho de 2007
		junior_pd_bento@yahoo.com.br
		Este script é disponibilizado utilizando
		a licença GPL em sua versão mais atual.
		Distribua, aprenda, ensine
		mas mantenha os créditos do autor
		Viva ao Software Livre e à livre informação
	*/
	/*
		Função checa_cfp
		Essa função retorna:
		0 em caso de sucesso
		1 em caso de cpf errado
		2 em caso de cpf não numérico ou se o tamanho não estiver certo.
	*/
	function checa_cpf ($cpf)
	{
		if((!is_numeric($cpf)) or (strlen($cpf) <> 11))
		{
			return 2;
		}
		else
		{
			if ( ($cpf == '11111111111') || ($cpf == '22222222222') ||
			($cpf == '33333333333') || ($cpf == '44444444444') ||
			($cpf == '55555555555') || ($cpf == '66666666666') ||
			($cpf == '77777777777') || ($cpf == '88888888888') ||
			($cpf == '99999999999') || ($cpf == '00000000000') )
			{
				return 1;
			}
			else
			{
				$cpf_dv = substr($cpf, 9,2);
			}
		}
		for($i=0; $i<=8; $i++)
		{
			$digito[$i] = substr($cpf, $i,1);
		}
		$posicao = 10;
		$soma = 0;
		for($i=0; $i<=8; $i++)
		{
			$soma = $soma + $digito[$i] * $posicao;
			$posicao = $posicao - 1;
		}
		$digito[9] = $soma % 11;
		if($digito[9] < 2)
		{
			$digito[9] = 0;
		}
		else
		{
			$digito[9] = 11 - $digito[9];
		}
		$posicao = 11;
		$soma = 0;
		for ($i=0; $i<=9; $i++)
		{
			$soma = $soma + $digito[$i] * $posicao;
			$posicao = $posicao - 1;
		}
		$digito[10] = $soma % 11;
		if ($digito[10] < 2)
		{
			$digito[10] = 0;
		}
		else
		{
			$digito[10] = 11 - $digito[10];
		}
		$dv = $digito[9] * 10 + $digito[10];
		if ($dv != $cpf_dv)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	/*
		Função checa_cnpj
		Essa função retorna:
		0 em caso de sucesso
		1 em caso de cnpj errado
		2 em caso de cnpj não numérico ou se o tamanho não estiver certo.
	*/
	function checa_cnpj($cnpj)
	{
		if ((!is_numeric($cnpj)) or (strlen($cnpj) <> 14))
		{
			return 2;
		}
		else
		{
			$i = 0;
			while ($i < 14)
			{
			$cnpj_d[$i] = substr($cnpj,$i,1);
			$i++;
			}
			$dv_ori = $cnpj[12] . $cnpj[13];
			$soma1 = 0;
			$soma1 = $soma1 + ($cnpj[0] * 5);
			$soma1 = $soma1 + ($cnpj[1] * 4);
			$soma1 = $soma1 + ($cnpj[2] * 3);
			$soma1 = $soma1 + ($cnpj[3] * 2);
			$soma1 = $soma1 + ($cnpj[4] * 9);
			$soma1 = $soma1 + ($cnpj[5] * 8);
			$soma1 = $soma1 + ($cnpj[6] * 7);
			$soma1 = $soma1 + ($cnpj[7] * 6);
			$soma1 = $soma1 + ($cnpj[8] * 5);
			$soma1 = $soma1 + ($cnpj[9] * 4);
			$soma1 = $soma1 + ($cnpj[10] * 3);
			$soma1 = $soma1 + ($cnpj[11] * 2);
			$rest1 = $soma1 % 11;
			if ($rest1 < 2)
			{
				$dv1 = 0;
			}
			else
			{
				$dv1 = 11 - $rest1;
			}
			$soma2 = 0;
			$soma2 = $soma2 + ($cnpj[0] * 6);
			$soma2 = $soma2 + ($cnpj[1] * 5);
			$soma2 = $soma2 + ($cnpj[2] * 4);
			$soma2 = $soma2 + ($cnpj[3] * 3);
			$soma2 = $soma2 + ($cnpj[4] * 2);
			$soma2 = $soma2 + ($cnpj[5] * 9);
			$soma2 = $soma2 + ($cnpj[6] * 8);
			$soma2 = $soma2 + ($cnpj[7] * 7);
			$soma2 = $soma2 + ($cnpj[8] * 6);
			$soma2 = $soma2 + ($cnpj[9] * 5);
			$soma2 = $soma2 + ($cnpj[10] * 4);
			$soma2 = $soma2 + ($cnpj[11] * 3);
			$soma2 = $soma2 + ($dv1 * 2);
			$rest2 = $soma2 % 11;
			if ($rest2 < 2)
			{
				$dv2 = 0;
			}
			else
			{
				$dv2 = 11 - $rest2;
			}
			$dv_calc = $dv1 . $dv2;
			if ($dv_ori == $dv_calc)
			{
				return 0;
			}
			else
			{
				return 1;
			}
		}
	}
	// modulo 11 para validação de CPF e CNPJ
	function check_cnpj_cpf($source) {
		$len=strlen($source);
		if ($len == 11) {return checa_cpf($source);}
		elseif ($len == 14) {return checa_cnpj($source);}
		else return 1;
		

	}


	// Verifica se o botão de validação foi acionado
	if(isset($_POST['confirmo']))
		{// Adiciona o numero enviado na variavel $cpf_enviado, poderia ser outro nome, e executa a função acima
		
		$cpf_enviado = check_cnpj_cpf($_POST['nr_cnpj']);
		// Verifica a resposta da função e exibe na tela
		if($cpf_enviado == 1){
			echo "<script>alert('O número do CPF/CNPJ (".$_POST['nr_cnpj'].") informado é inválido.');window.history.go(-1); </script>";
			exit;
		}
	}
require ("_caminho.php");
require ($_caminho."intranet/admin/conexao_postgre.php");
//require ($_caminho."intranet/admin/conexao_postgre.php");
//require ("../../intranet/licitacao/header.php");

echo "<!--<pre>";
print_r($_POST);
echo "</pre>-->";
//variaveis contem o complemento do nm_endereco e nome do arquivo
//$numero = $_POST["numero"];

$nr_registro = $_POST["nr_registro"];
//echo "<br>".$nr_registro."<br>";
$nr_edital_ano = $_POST["nr_ano"];
$nr_ip = $_POST["nr_ip"];

$cd_entidade = $_POST["cd_entidade"];
$cd_modalidade = $_POST["cd_modalidade"];

$nm_edital = $_POST["nm_edital"];
$cd_edital = $_POST["cd_edital"];
//$pasta_arquivo = $_POST["pasta_arquivo"];
$nm_razao_social = $_POST["nm_razao_social"];
$nr_cnpj = $_POST["nr_cnpj"];
$nm_endereco = $_POST["nm_endereco"];
$nm_cidade = $_POST["nm_cidade"];
$nm_estado = $_POST["nm_estado"];
$nr_ddd = $_POST["nr_ddd"];
$nr_telefone = $_POST["nr_telefone"];
$nm_e_mail = $_POST["nm_e_mail"];
$nm_contato = $_POST["nm_contato"];

//Montar parte do endereço onde o arquivo se encontra no servidor
/*$endereco_arquivo = $pasta_arquivo;
$endereco_arquivo.= "/";
$endereco_arquivo.= $nm_edital;*/

//Para teste...
//echo $nr_ip;
//echo "<br>";
//echo $nr_ano;
//echo "<br>";
//echo $pasta_arquivo;
//echo "<br>";
//echo $nm_edital;
//echo "<br>";
//echo $endereco_arquivo;
?>

<html>

<style type="text/css">
@import url(../example.css);
</style>

<head>
<title></title>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<body text="#008000" link="#008000" vlink="#008000" alink="#008000">
 
<?php
//montar data e hora de insersao - data no servidor
//data
$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
$dia = gmdate("d", $data_servidor);
$mes = gmdate("m", $data_servidor);
$nr_ano = gmdate("Y", $data_servidor);
$data_ins = $dia."/".$mes."/".$nr_ano;
//hora
$hora = gmdate("H", $data_servidor);
$minuto = gmdate("i", $data_servidor);
$segundo = gmdate("s", $data_servidor);
$hora_ins = $hora.":".$minuto.":".$segundo;
//Busca o codigo sequencial da tabela.

$stmt_solicitacao= pg_query($conexao_postgre, 'select max(nr_registro)+1 as nr_solictacao from edital.solicitacoes');
$result = //ociexecute($stmt_solicitacao);
$row_contador = pg_fetch_array($stmt_solicitacao);
$nr_solicitacao = $row_contador["nr_solictacao"];
//echo $cd_entidade."-".$cd_modalidade."-".$nr_solicitacao;
if (is_null($nr_solicitacao)) {
  $nr_solicitacao = 1;
}
//instrução SQL
$declar = "insert into edital.solicitacoes (";
$declar .= "nr_registro,
			cd_edital,
			nr_edital,
			nr_edital_ano,
			cd_entidade,
			cd_modalidade,
			nm_arquivo,
			nm_razao_social,
			nr_cpf_cnpj,
			nm_endereco,
			nm_cidade,
			nm_estado,
			nr_ddd,
			nr_telefone,
			nm_e_mail,
			nm_contato,
			nr_ip
";
$declar.= " )  values (
			$1,
			$2,
			$3,
			$4,
			$5,
			$6,
			$7,
			$8,
			$9,
			$10,
			$11,
			$12,
			$13,
			$14,
			$15,
			$16,
			$17)";


$parametros = array ();
$parametros[] = $nr_solicitacao;
$parametros[] = $cd_edital;
$parametros[] = $nr_registro;
$parametros[] = $nr_edital_ano;
$parametros[] = $cd_entidade;
$parametros[] = $cd_modalidade;
$parametros[] = $nm_edital;
$parametros[] = $nm_razao_social;
$parametros[] = $nr_cnpj;
$parametros[] = $nm_endereco;
$parametros[] = $nm_cidade;
$parametros[] = $nm_estado;
$parametros[] = $nr_ddd;
$parametros[] = $nr_telefone;
$parametros[] = $nm_e_mail;
$parametros[] = $nm_contato;
$parametros[] = $nr_ip;

//Usar para teste
//echo $declar;
//echo "<br>";

//executa a instrução SQL
$stmt_solicitacao= pg_query_params($conexao_postgre, $declar, $parametros);

$result = !($stmt_solicitacao === false);////ociexecute($stmt_solicitacao);

if ($result) {
	echo "Link para o arquivo:<br>"; 
	echo "<script language=\"javascript\">
					$('#botoes').hide();
				</script>
				";
	//echo "<META HTTP-EQUIV='Refresh' CONTENT='300;download_edital.php?nr_registro=$nr_registro'>";
	//echo "<a href='http://www.toledo.pr.gov.br/licitacaoPublica/download_edital.php?nr_registro=$nr_registro' target=\"_blank\"> $nm_edital</a><br>";
	$identificacao = base64_encode("1".$nr_registro);//1=Download de Edital
	echo "<a href='downloadv_post.php?id=$identificacao' target=\"_blank\"> $nm_edital</a>"; 
} else {
	echo "<h4><font face=\"verdana\" color=\"#000000\">Erro ao gravar os dados...<br>Comando SQL usado: <br>$declar</font></h4>";
	echo "<br>";

	// grava o erro no log.
	$sql_ultimo = "select max(cd_log) as ultimo from log_erros";
	$stmt_ultimo = pg_query ($conexao_postgre, $sql_ultimo);
	$row_ultimo = pg_fetch_array ($stmt_ultimo);
	$ultimo = $row_ultimo["ultimo"];
	if (isset ($row_ultimo["ultimo"]) ) {
		$ultimo++;
	} else {
		$ultimo = 1;
	}
	
	$parametros = array();
	$parametros[] = $nr_solicitacao;
	$parametros[] = $cd_edital;
	$parametros[] = $nr_edital;
	$parametros[] = $nr_registro;
	$parametros[] = $nr_ano;
	$parametros[] = $cd_entidade;
	$parametros[] = $cd_modalidade;
	$parametros[] = $nm_edital;
	$parametros[] = $nm_razao_social;
	$parametros[] = $nr_cnpj;
	$parametros[] = $nm_endereco;
	$parametros[] = $nm_cidade;
	$parametros[] = $nm_estado;
	$parametros[] = $nr_ddd;
	$parametros[] = $nr_telefone;
	$parametros[] = $nm_e_mail;
	$parametros[] = $nm_contato;
	$parametros[] = $nr_ip;

	$parametros_ = implode ('-><-', $parametros);
	$erro = trim(pg_last_error($conexao_postgre));
	$sql_log = "insert into log_erros (sql_usada, sql_parametros, cd_log, nm_error_msg) values ($1, $2, $3, $4)";
	$stmt_log = pg_query_params ($conexao_postgre, $sql_log, array ($declar, $parametros_, $ultimo, $erro) );
	// término de gravar o erro no log
}
//echo "<h4><a href='index_edital.php'>Página Principal</a></h4>";

?>

</body>
</html>
