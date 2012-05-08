<?php
header("Content-Type: text/html; charset=utf-8",true);
require ("_caminho.php");
require ($_caminho."intranet/admin/conexao_oracle_controleacesso_utf.php");

/*print_r($_POST);
print_r($_GET);*/

if (isset ($_POST["div_a_esconder"])) {
	$div_a_esconder	= $_POST["div_a_esconder"];
}
if (isset ($_POST["nr_registro"])) {
	$nr_registro	= $_POST["nr_registro"];
}
$sql = "select CD_EDITAL, NR_ANO, LK_EDITAL, NM_EDITAL, CD_ENTIDADE, CD_MODALIDADE from EDITAL_EDITAIS where NR_REGISTRO= $nr_registro";
$stmt_edital= ociparse($conexao_controle_acesso, $sql);
ociexecute($stmt_edital);
$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);
$nr_ano			= $row_edital["NR_ANO"];
$nm_edital	= $row_edital["NM_EDITAL"];
$cd_entidade	= $row_edital["CD_ENTIDADE"];
$cd_modalidade	= $row_edital["CD_MODALIDADE"];
$cd_edital			= $row_edital["CD_EDITAL"];


/**********************************************************
	Rotina em php para validação e formatação de cpf e cnpj
	criada por Lauro A L Brito - 14/03/2007
	**********************************************************/
	
	// modulo 11 para validação de CPF e CNPJ
	function check_cnpj_cpf($source,$f) {
	/* $f=formato de saída
	0 = sem formatação, retira '.','/','-' volta só digitos
	2 = com formatação: 99.999.999/9999-99 ou 999.999.999-99
	*/
	$s=ereg_replace("[' '-./ \t]",'',$source); // retira caracteres de separação inclusive espaço - o /t não sei o que significa
	$len=strlen($s)-2; // pega o tamanho da string menos 2 que são os digitos verificadores
	if ($len != 9 && $len != 12)
	return false; // se for <> 9 ou <> 12 retorna pois a quantidade de dígitos está errada.
	
	$num= substr($s,0,$len); // pega so a parte do numero sem o dv
	$dv = substr($s,-2); // pega somente o dv
	
	$d1 = 0; // verifica o primeiro dv
	for ($i = 0; $i < $len; $i++) {
	if ($len==11)
	$d1 += $num[11 - $i] * (2 + ($i % 8)); // expressão para cnpj
	else
	$d1 += $num[$i] * (10 - $i); // expressão para cpf
	}
	
	if ($d1==0) return false;
	$d1 = 11 - ($d1 % 11);
	if ($d1 > 9) $d1 = 0;
	if ($dv[0] != $d1) return false;
	
	$d1 *= 2; // verifica o segundo dv
	for ($i = 0; $i < $len; $i++) {
	if ($len==11)
	$d1 += $num[11 - $i] * (2 + (($i + 1) % 8)); // expressão para cnpj
	else
	$d1 += $num[$i] * (11 - $i); // expressão para cpf
	}
	
	$d1 = 11 - ($d1 % 11);
	if ($d1 > 9) $d1 = 0;
	if ($dv[1] != $d1) return false;
	
	if ($f==0) return($s); // retorna o numero limpo sem '.', '-', '/'
	
	// retorna cpf formatado
	$formato=($len==9) ? '###.###.###-##' : '##.###.###/####-##'; // seleciona a máscara para cpf ou cnpj
	$indice=-1;
	for ($x=0; $x < strlen($formato); $x++) {
	if ($formato[$x]=='#')
	$formato[$x] =$s[++$indice];
	}
	return($formato); // retorna cpf ou cnpj formatado
	} //

	/*if (pForm.tipoCnpj.checked)
		alert("CNPJ:"
			+ "\nDesformatado = " + unformatNumber(val)
			+ "\nFormatado = " + formatCpfCnpj(val, true, true)
			+ "\nDVs = " + dvCpfCnpj(base, true)
			+ "\nVálido = " + isCnpj(val));
	else
		alert("CPF:"
			+ "\nDesformatado = " + unformatNumber(val)
			+ "\nFormatado = " + formatCpfCnpj(val, true)
			+ "\nDVs = " + dvCpfCnpj(base, false)
			+ "\nVálido = " + isCpf(val));*/
?>

<script language="javascript" type="text/javascript">
document.edital.nm_razao_social.focus();
function fnc_grava_solicitacao () {
	//alert ('entrei');
	var retorno = valida();
	if (retorno) {
		//alert ('entrei');
		$("#retorno").show();
		var str = new Array($("input"));
		$("#retorno").load('formulario_solicitacao-gv2_.php', {
			'nr_registro' : $("#nr_registro").val(),
			'nr_ano' : $("#nr_ano").val(),
			'nr_ip' : $("#nr_ip").val(),
			'cd_entidade' : $("#cd_entidade").val(),
			'cd_modalidade' : $("#cd_modalidade").val(),
			'nm_edital' : $("#nm_edital").val(),
			'cd_edital' : $("#cd_edital").val(),
			'nm_razao_social' : $("#nm_razao_social").val(),
			'nr_cnpj' : $("#nr_cnpj").val(),
			'nm_endereco' : $("#nm_endereco").val(),
			'nm_cidade' : $("#nm_cidade").val(),
			'nm_estado' : $("#nm_estado").val(),
			'nr_ddd' : $("#nr_ddd").val(),
			'nr_telefone' : $("#nr_telefone").val(),
			'nm_e_mail' : $("#nm_e_mail").val(),
			'nm_contato' : $("#nm_contato").val()
		});
		//alert ('terminei');
	}
//	alert ('terminei');
}
function valida()
{
  //variavel com o nome do formulario...
  f = document.edital;
  //valida nome ou razão social
  if (f.nm_razao_social.value == "")
  {
    alert("Informe o nome ou razão social!");
	f.nm_razao_social.focus();
	return false;
  }
  //valida cpf ou cnpj
  if (f.nr_cnpj.value == "")
  {
    alert("Informe o cpf ou cnpj!");
	f.nr_cnpj.focus();
	return false;
  } 
  //validar cpf ou cnpj(verificacao se contem apenas numeros)
  if (isNaN(f.nr_cnpj.value))
  {
	alert("Informe apenas numeros para cpf ou cnpj!");
	f.nr_cnpj.focus();
	return false;
  }    
  //valida endereço
  if (f.nm_endereco.value == "")
  {
    alert("Informe o endereço!");
	f.nm_endereco.focus();
	return false;
  }
  //valida cidade
  if (f.nm_cidade.value == "")
  {
    alert("Informe a cidade!");
	f.nm_cidade.focus();
	return false;
  }
  //valida ddd
  if (f.nr_ddd.value == "")
  {
    alert("Informe o ddd!");
	f.nr_ddd.focus();
	return false;
  }  
  //validar ddd(verificacao se contem apenas numeros)
  if (isNaN(f.nr_ddd.value))
  {
	alert("Informe apenas numeros para o DDD!");
	f.nr_ddd.focus();
	return false;
  }   
  //valida telefone
  if (f.nr_telefone.value == "")
  {
    alert("Informe o telefone!");
	f.nr_telefone.focus();
	return false;
  }  
  //validar telefone(verificacao se contem apenas numeros)
  if (isNaN(f.nr_telefone.value))
  {
	alert("Informe apenas numeros para o telefone!");
	f.nr_telefone.focus();
	return false;
  }     
  //valida email - preenchido
  if (f.nm_e_mail.value == ""){
	alert("Informe o e-mail para contato!");
	f.nm_e_mail.focus();
	return false;
  } 
  //valida email - arroba
  if (f.nm_e_mail.value == "" || f.nm_e_mail.value.indexOf('@',0) == -1) {
	window.alert('Sr. Usuário, favor preencher corretamente o campo e-mail, com um e-mail valido!')
	f.nm_e_mail.focus();
	return false;
  }  
  //valida nome para contato
  if (f.nm_contato.value == "")
  {
    alert("Informe o nome do contato!");
	f.nm_contato.focus();
	return false;
  }   
	return true;
}
document.edital.nm_razao_social.focus();
$("#nm_razao_social").focus();
$("#retorno").hide();
function fnc_esconde_div () {
	$("#"+arguments[0]).hide();
}

</script>

<style type="text/css">
@import url(../../intranet/example.css);
</style>

<br>
<table width="702" border="0" cellspacing="0" cellpadding="0" align='center'>
  <tr>
    <td>
	  <form method="post" name="edital" id="edital">
			<input readonly name="nr_registro" type="hidden" id="nr_registro" value="<?php echo $nr_registro; ?>">
			<input readonly name="div_a_esconder" type="hidden" id="div_a_esconder" value="<?php echo $div_a_esconder; ?>">
			<input readonly name="cd_edital" type="hidden" id="cd_edital" value="<?php echo $cd_edital; ?>">
			<input readonly name="nm_edital" type="hidden" id="nm_edital" value="<?php echo $nm_edital; ?>">
				<div class='cabecalho'>Solicita&ccedil;&atilde;o de Editais</div>
				<div class='cadastro'>
					<label class='cadastro'>Identificador:&nbsp;</label>
						<?php
						$browser = $_SERVER["HTTP_USER_AGENT"];
									$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
						?>	
						<input readonly name="cd_entidade" type="text" id="cd_entidade" value="<?php echo $cd_entidade; ?>" size="3" maxlength="3">
						<strong>. </strong>
						<input readonly name="cd_modalidade" type="text" id="cd_modalidade" value="<?php echo $cd_modalidade; ?>" size="3" maxlength="3">
						<strong>. </strong>
									<input readonly name="nr_registro" type="text" id="nr_registro" value="<?php echo $nr_registro; ?>" size="6" maxlength="6">
									<strong>-</strong>
						<input readonly name="nr_ip" type="text" id="nr_ip" value="<?php echo $ip; ?>" size="21" maxlength="15"><br>
					<label class='cadastro'>Edital / Ano: </label><input readonly name="cd_edital" type="text" id="cd_edital" value="<?php echo $cd_edital; ?>" size="12" maxlength="8"> / <input readonly name="nr_ano" type="text" id="nr_ano" value="<?php echo $nr_ano; ?>" size="12" maxlength="4"><br>
					<label class='cadastro'>Nome Arquivo: </label><input readonly name="nm_edital" type="text" id="nm_edital" value="<?php echo $nm_edital; ?>" size="60" maxlength="50"><br>
					<label class='cadastro'>Raz&atilde;o Social/Nome: </label><input name="nm_razao_social" type="text" id="nm_razao_social" size="60" maxlength="60"><br>
					<label class='cadastro'>CNPJ/CPF: </label><input name="nr_cnpj" type="text" id="nr_cnpj" size="24" maxlength="14"> Digite somente os n&uacute;meros<br>
					<label class='cadastro'>Endere&ccedil;o: </label><input name="nm_endereco" type="text" id="nm_endereco" size="60" maxlength="60"><br>
					<label class='cadastro'>Cidade: </label><input name="nm_cidade" type="text" id="nm_cidade" size="40" maxlength="40"><br>
					<label class='cadastro'>Estado:</label>
						<select name="nm_estado" id="nm_estado">
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amap&aacute;</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Cear&aacute;</option>
							<option value="DF">Distrito Federal</option>
							<option value="GO">Goi&aacute;s</option>
							<option value="ES">Esp&iacute;rito Santo</option>
							<option value="MA">Maranh&atilde;o</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PB">Paraiba</option>
							<option value="PR" selected>Paran&aacute;</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piau&iacute;</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rond&ocirc;nia</option>
							<option value="RR">Ror&acirc;ima</option>
							<option value="SP">S&atilde;o Paulo</option>
							<option value="SC">Santa Catarina</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select><br>
					<label class='cadastro'>DDD/Telefone: </label><input name="nr_ddd" type="text" size="4" maxlength="2" id="nr_ddd"> - <input name="nr_telefone" type="text" id="nr_telefone" size="18" maxlength="8"> Digite somente os n&uacute;meros<br>
					<label class='cadastro'>E-mail: </label><input name="nm_e_mail" type="text" id="nm_e_mail" size="60" maxlength="60"><br>
					<label class='cadastro'>Nome Contato: </label><input name="nm_contato" type="text" id="nm_contato" size="60" maxlength="60"></div>
					<br>
					Obs: Todos os campos s&atilde;o de preenchimento obrigat&oacute;rio.<br><br>
					<div align="center"><strong>Termo de Ci&ecirc;ncia e de Responsabilidade </strong></div>
					<p align="justify">&nbsp;&nbsp;&nbsp;Declaro ter ci&ecirc;ncia de que o formul&aacute;rio e as informa&ccedil;&otilde;es acima n&atilde;o constituem, nem representam Cadastro de Fornecedores do Munic&iacute;pio de Toledo, mas mera solicita&ccedil;&atilde;o de Edital, não implicando em qualquer obrigatoriedade de participação no referido edital.<br>
				&nbsp;&nbsp;&nbsp;Responsabilizo-me, tamb&eacute;m, na forma da Lei, pela veracidade das informa&ccedil;&otilde;es acima prestadas, n&atilde;o atribuindo ao Munic&iacute;pio  de Toledo qualquer obriga&ccedil;&atilde;o de verifica&ccedil;&atilde;o de sua autenticidade. <br>
				</p>
				<div align='center' id='botoes'><input name="confirmo" type="button" id="confirmo" value="   Concordo   " OnClick="fnc_grava_solicitacao()">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="nconfirmo" type="button" id="nconfirmo" value="N&atilde;o Concordo" onClick="javascript: fnc_esconde_div('<?php echo $div_a_esconder; ?>')">
				</div>
				<div id='retorno' align='center'>Retorno</div>
			</div>
	  </form>	
	</td>
  </tr>
</table>
