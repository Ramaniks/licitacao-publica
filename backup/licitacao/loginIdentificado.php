<?php
header("Content-Type: text/html; charset=utf-8",true);
/**Valdecir:14/07/2008:Modificado para pasta principal e alteração para Identificado*/
//require ("_caminho.php");
?>
<html>
<head>

<style type="text/css">
@import url(../../intranet/example.css);
</style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include ("../../intranet/licitacao/header.php");
?>
<script language="JavaScript">
<!--
function set_focus() {
  document.acesso.login.focus();
}
// -->
</script>

</head>
<body onLoad="set_focus()">

<div align="center">
      <table width="450" height="46" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top">
		  <form name="acesso" method="post" action="autenticaIdentificado.php">
            <table width="353" border="0" cellspacing="1" cellpadding="4">
              <tr>
                <td colspan="2"><table width="344" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="76"><img src="../../imagem/file_locked.png" width="48" height="48"></td>
                    <td width="268"><div align="center"><span class="style1 style5">Acesso Restrito para Empresas</span></div></td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td colspan="2"><span class="style7">Por favor, escreve um login e uma senha v&aacute;lidos</span></td>
                </tr>
              <tr>
                <td width="97"><span class="td1 style6 style8">Login:</span></td>
                <td width="237"><input type="text" name="login" size="25" ></td>
              </tr>
              <tr>
                <td><span class="td1 style6 style8">Senha:</span></td>
                <td>
				  <input type="password" name="senha" size="25" ></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td colspan="2"><div align="center">
                  <input name="submit" type="submit" value="  Acessar  ">&nbsp;&nbsp;
                  <input name="cancelar" type="button" onClick="javascript:location.href='/servicosPublicos/licitacao/index_editalv3.php'" value=" Cancelar ">
                </div></td>
                </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="justify"><span class="style6"><strong>Obs.:</strong> Em caso de n&atilde;o possuir login e senha entre em contato informando o n&uacute;mero e ano do edital desejado atrav&eacute;s do e-mail <a href="mailto:licitacao@toledo.pr.gov.br">licitacao@toledo.pr.gov.br</a> para receber instru&ccedil;&otilde;es de como proceder para obter acesso. </span></div></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table>
    </div>
		
<?php
include ("../../intranet/licitacao/bottom.php");
?>
</body>
</html>