<?php 
header("Content-Type: text/html; charset=utf-8",true);
//Valdecir:10/07/2008:Revisão do relatorio e correção dos links e textos.
//require ("_caminho.php");
require ("../../intranet/licitacao/header.php");
?>
<html>
<head>
<title>Cadastro de Fornecedores</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<SCRIPT language=javascript>

  function mOvr(src,clrOver) {
    if (!src.contains(event.fromElement)) {
	  
	  src.bgColor = clrOver;
	}
  }
  function mOut(src,clrIn) {
	if (!src.contains(event.toElement)) {
	  src.style.cursor = 'default';
	  src.bgColor = clrIn;
	}
  }
  

</SCRIPT>
<style type="text/css">
<!--
		A:link {
	color:#008000;
	text-decoration: none;
}
        A:visited {
	color:#008000;
	text-decoration: none;
}
        A:hover {
	color:#008000;
	text-decoration: underline;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-size: 12px}
a:active {
	text-decoration: none;
	color: #008000;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 10px; }
.style5 {font-size: 10px}
body {
	margin-left: 10px;
	margin-top: 12px;
}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
-->
</style>
</head>
<body bgcolor="#ffffff">
<table width="765" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr bgcolor="#86CAA1"> 
    <td height="30" colspan="3"> <div align="center" class="style1 style2"><font face="Verdana, Arial, Helvetica, sans-serif">Rela&ccedil;&atilde;o 
        de documentos para inscri&ccedil;&atilde;o / renova&ccedil;&atilde;o de 
    Cadastro de Licitantes do Munic&iacute;pio de Toledo</font></div></td>
  </tr>
  <tr bgcolor="#86CAA1"> 
    <td colspan="3"><span class="style9"><font face="Verdana, Arial, Helvetica, sans-serif">Documentos 
      obrigat&oacute;rios</font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Solicitamos o preenchimento da <a href="downloads/DeclaracaoContendoInformacoes_.pdf" target="_blank">Declaração</a>, enviar juntamente com a documentação.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Comprovante de Inscri&ccedil;&atilde;o e de Situa&ccedil;&atilde;o 
      Cadastral - CNPJ atualizado. (<a href="http://www.receita.fazenda.gov.br/PessoaJuridica/CNPJ/cnpjreva/Cnpjreva_Solicitacao.asp" target="_blank">Consulta no site da Receita Federal</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Certid&atilde;o 
      simplificada ou contrato social e &uacute;ltima altera&ccedil;&atilde;o 
      de capital e objeto devidamente registrados na Junta Comercial ou Registro 
      de T&iacute;tulos e documentos.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8"> Certid&otilde;es negativas de:</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td width="4%">&nbsp;</td>
    <td colspan="2"><span class="style8">Tributos 
      Federais - validade 180 dias. (<a href="http://www.receita.fazenda.gov.br" target="_blank">Veja aqui</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="2"><span class="style8">Tributos 
      Estaduais - validade 60 dias. (<a href="http://www.fazenda.pr.gov.br" target="_blank">Veja aqui</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="2"><span class="style8">Tributos 
      Municipais - validade 60 dias.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="3"><span class="style8">Débitos Trabalhistas (<a href="http://www.tst.jus.br/certidao" target="_blank">Veja aqui</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="3"><span class="style8">Regularidade do FGTS CRF Caixa (<a href="https://www.sifge.caixa.gov.br/Empresa/Crf/FgeCfSCriteriosPesquisa.asp" target="_blank">Veja aqui</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="3"><span class="style8">Regularidade do INSS CND Caixa (<a href="http://www010.dataprev.gov.br/cws/contexto/cnd/cnd.html" target="_blank">Veja aqui</a>)</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td>&nbsp;</td>
    <td colspan="3"><span class="style8">Pedido de Falência e Concordata passada pelos Distribuidores Judiciários, validade 60 dias.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Alvará de localização emitida pela Prefeitura Municipal da sede do licitante.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Ultimo balan&ccedil;o patrimonial.</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">Obs: Os documentos deverão ser todos fotocopiados (Cópias).</span></td>
  </tr>
  <tr bgcolor="#86CAA1"> 
    <td colspan="3"><span class="style4"><font face="Verdana, Arial, Helvetica, sans-serif">Documentos 
      Complementares</font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="3"><span class="style8">De 
      acordo com a atividade desenvolvida pela empresa, al&eacute;m dos documentos 
      obrigat&oacute;rios acima citados, dever&atilde;o ser apresentados os seguintes:</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><strong>Empresas 
      de fabrica&ccedil;&atilde;o e comercializa&ccedil;&atilde;o de medicamentos </strong></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td width="93%"><span class="style8"><font color="#000000">Registro 
      do profissional e empresa junto ao Conselho Regional de Medicina.</font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><font color="#000000"><strong>Empresas 
      de guarda e vigil&acirc;ncia</strong></font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Certificado 
      de seguran&ccedil;a atualizado expedido pela pol&iacute;cia Federal</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Alvar&aacute; 
      expedido pela comiss&atilde;o Executiva do Minist&eacute;rio da Justi&ccedil;a</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><strong>Empresas 
      de representa&ccedil;&atilde;o comercial (com&eacute;rcio)</strong></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Registro no 
      Conselho de Repres. Comerciais e prova de quita&ccedil;&atilde;o da anuidade 
    </span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Carta de credenciamento 
      das empresas representadas</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><strong>Empresas 
      de dedetiza&ccedil;&atilde;o </strong></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Licença Sanitária 
      da empresa atualizada para a Secret&aacute;ria de Sa&uacute;de do Munic&iacute;pio da proponente</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><font color="#000000"><strong>Empresas 
      do ramo de frigor&iacute;ficos e agropecu&aacute;ria</strong></font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Registro de 
      Estabelecimento no Minist&eacute;rio da Agricultura</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Registro do 
      Profissional e Empresa junto ao CRMV e ao CREA</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Prova de inscri&ccedil;&atilde;o 
      da Emp no Servi&ccedil;o de Inspe&ccedil;&atilde;o Federal- SIF - do Minist&eacute;rio 
      da Saude</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><font color="#000000"><strong>Empresas 
      do ramo de comercializa&ccedil;&atilde;o de carnes e derivados</strong></font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8"> Licen&ccedil;a 
      Sanit&aacute;ria atualizada expedida pela Secret&aacute;ria de Sa&uacute;de</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><font color="#000000"><strong>Inscri&ccedil;&atilde;o 
      de Aut&ocirc;nomos</strong></font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Carteira de 
      identidade</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Cart&atilde;o 
      de cadastro da Pessoa P&uacute;blica - CPF</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Prova de registro 
      no &oacute;rg&atilde;o de classe</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Certid&atilde;o 
      negativa de execu&ccedil;&atilde;o patrimonial expedida pelos Distribuidores</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><span class="style5"></span></td>
    <td><span class="style8">Judici&aacute;rios 
      da Comarca do domic&iacute;lio da pessoa</span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style8"><font color="#000000"><strong>Empresas Executoras de Obras</strong></font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><font size="1">&nbsp;</font></td>
    <td colspan="2"><span class="style8">Certidão de Registro no CREA</span></td>
  </tr>
  <tr bgcolor="#86CAA1"> 
    <td colspan="3"><span class="style9"><font face="Verdana, Arial, Helvetica, sans-serif">Informa&ccedil;&otilde;es e envio da documenta&ccedil;&atilde;o para:</font></span></td>
  </tr>
  <tr bgcolor="#e7e7e7"> 
    <td colspan="2"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
    <td><p class="style2"><font face="Verdana, Arial, Helvetica, sans-serif">
        DEPARTAMENTO DE COMPRAS E MATERIAL <br>
        A/C Arli Ribeiro - Fone: (45) 3055- 8805<br>
        Rua Raimundo Leonardi 1586 - CEP 85.900-110 <br>
        Toledo - Paran&aacute; <br>
				compras.arli@toledo.pr.gov.br</font></p></td>
  </tr>
</table>
<?php
require ("../../intranet/licitacao/bottom.php");
?>
</body>
</html>
