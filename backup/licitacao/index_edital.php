<?php
header("Content-Type: text/html; charset=utf-8",true);
require ("../../intranet/admin/conexao_oracle_controleacesso_utf.php");
require ("../../intranet/licitacao/header.php");

$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
$dia = gmdate("d", $data_servidor);
$mes = gmdate("m", $data_servidor);
$ano = gmdate("Y", $data_servidor);
//$data_atual = $ano."-".$mes."-".$dia;
$data_atual = $dia."/".$mes."/".$ano;

$sql = "select count(*) as QUANTIDADE, CD_ENTIDADE, (select DS_ENTIDADE from EDITAL_ENTIDADES where EDITAL_ENTIDADES.CD_ENTIDADE= EDITAL_EDITAIS.CD_ENTIDADE) NM_ENTIDADE from EDITAL_EDITAIS ";
$sql .= "			    where TO_DATE(DT_INICIO_DISPONIVEL, 'DD/MM/RRRR')<=TO_DATE('".$data_atual."', 'DD/MM/RRRR') 
			    and TO_DATE(DT_FIM_DISPONIVEL, 'DD/MM/RRRR')>=TO_DATE('".$data_atual."', 'DD/MM/RRRR')";
$sql .= " group by EDITAL_EDITAIS.CD_ENTIDADE order by NM_ENTIDADE";
$stmt_entidades = ociparse($conexao_controle_acesso, $sql);
ociexecute($stmt_entidades);
//$row_edital= oci_fetch_array($stmt_edital, OCI_BOTH);

?>

<html>
<head>
<style type="text/css">
@import url(../../intranet/example.css);
</style>
<title>Prefeitura do Município de Toledo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<table align='center' width='500' border="0" cellpadding="2" cellspacing="1" class='mytable'>
		<tr>
			<th height="31"><div align='center'>Avisos de Licita&ccedil;&otilde;es</div></th>
		</tr>
		<?php
			$cont = 1;
			while($linha = oci_fetch_array ($stmt_entidades, OCI_BOTH)) {
				$nm_entidade	= $linha ["NM_ENTIDADE"];
				$quantidade		= $linha ["QUANTIDADE"];
				$cd_entidade	= $linha ["CD_ENTIDADE"];
				
				if ($cont % 2 == 0) {
					$classe = 'par';
				} else {
					$classe = 'impar';
				}
				
				echo "	<tr class='$classe'>";
				echo "        <td height='22'><a href='mostrar_editais.php?cd_entidade=$cd_entidade'><b>$nm_entidade</b></a> </strong> ($quantidade ";
				if ($quantidade==1) {
					echo "edital";
				} else {
					echo "editais";
				}
				echo ")</td>";
				echo "   </tr>";
				$cont++;
			}
		?>
	</table>

	<table width='90%' border="0" align="center" cellpadding="2" cellspacing="1">
		<tr>
			<td>
				<img src="../../imagem/file_locked.png" width="18" height="18"><a href="loginIdentificado.php" class="style4">Acesso Identificado</a><br>
				<br>* Veja a rela&ccedil;&atilde;o de documentos para inscri&ccedil;&atilde;o e/ou renova&ccedil;&atilde;o do Cadastro de Licitantes do Munic&iacute;pio de Toledo.<a href="cadastro_fornecedores.php"> Documentação Necessária.</a><br><br>
				* Para visualizar os documentos disponibilizados neste sítio de licitação, &eacute; necess&aacute;rio que voc&ecirc; tenha o programa  						Adobe Acrobat Reader instalado em seu computador.  						Caso n&atilde;o possua este programa, <a href="http://www.adobe.com/products/acrobat/readstep.html" target="_blank">clique aqui</a> para fazer o download gratuito.<br>
				<br>
				* Arquivos muito extensos encontram-se compactados em formato zip.  						Caso n&atilde;o possua o programa WinZip em seu computador, <a href="http://www.winzip.com/prod_down.htm" target="_blank">clique aqui</a> para fazer o download.<br>
				<br>* <b>Versão atualizada do programa de preenchimento da proposta.</b> <a href='../../servicosPublicos/licitacao/downloads/12062009/EsProposta.exe'>Baixe aqui</a>.<br>
				<br>* <b>Versão atualizada do programa de preenchimento da cotação.</b> <a href='../../servicosPublicos/licitacao/downloads/12062009/EsCotacao.exe'>Baixe aqui</a>.<br><br>
						* Os arquivos contidos nesta p&aacute;gina foram verificados pelo programa: <br>
						F-Secure Anti-Virus 8.01 build 133</font><br><br>
						<strong>D&Uacute;VIDAS NO PREENCHIMENTO DA PROPOSTA, LIGUE:</strong><br>
					(45) 3055-8819 ou 
					<a href="mailto:pregaoeletronico@toledo.pr.gov.br">pregaoeletronico@toledo.pr.gov.br</a><br>
					<br>
					<strong>QUALQUER D&Uacute;VIDA SOBRE EDITAIS, LIGUE:</strong><br>
					(45) 3055-8819 ou <a href="mailto: licitacao@toledo.pr.gov.br"> licitacao@toledo.pr.gov.br</a><br><br>
		<?php
			if (substr($_SERVER["REMOTE_ADDR"],0,8)=='192.168.') {
				echo "<div align='center'><img src=\"../../imagem/file_locked.png\" width=\"18\" height=\"18\"><a href='/intranet/licitacao/index.php'>Acesso Administrativo</a></div>";
			}	  
		?>
			</td>
		</tr>
	</table>

<?php
require ("../../intranet/licitacao/bottom.php");
?>
</body>
</html>
