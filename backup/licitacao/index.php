<html>
<head>
<style type="text/css">
<!--@import url(../../intranet/example.css);-->
</style>
<title>Prefeitura do Município de Toledo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript" src="/asn.js"> </script>  
</head>

<body>
<?php
	$ip = $_SERVER["REMOTE_ADDR"];

	require ("../../_caminho.php");
	require_once ($_caminho_intranet."admin/conexao_postgre.php");
	require_once ($_caminho_intranet."admin/conexao_banco.php");
	//echo $_caminho_intranet."licitacao/header.php";
	require_once ($_caminho_intranet."licitacao/header.php");

	$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
	$dia = gmdate("d", $data_servidor);
	$mes = gmdate("m", $data_servidor);
	$ano = gmdate("Y", $data_servidor);
	//$data_atual = $ano."-".$mes."-".$dia;
	$data_atual = $ano."/".$mes."/".$dia;

	if (isset ($_GET["id"]) ) {
		$cd_entidade_ = $_GET["id"];
	} else {
		$cd_entidade_ = "";
	}

	$sql_entidades = "
select 
	count(*) as quantidade, 
	cd_entidade, 
	(select ds_entidade from edital.entidades where edital.entidades.cd_entidade= edital.editais.cd_entidade) as nm_entidade
from 
	edital.editais 
where 
	dt_inicio_disponivel <= TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and dt_fim_disponivel >= TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and st_cancelado <> 'S' 
	and st_suspenso = 'N' ";
	if (strlen ($cd_entidade_) > 0) {
		$sql_entidades .= "
	and cd_entidade= :cd_entidade
		";
	}
	$sql_entidades .= "
group by 
	edital.editais.cd_entidade 
order by 
	nm_entidade
	";
	$stmt_entidades = $db->prepare($sql_entidades);
	$stmt_entidades->bindParam(":data_atual", $data_atual);
	if (strlen ($cd_entidade_) > 0) {
		$stmt_entidades->bindParam(":cd_entidade", $cd_entidade_);
	}
	$stmt_entidades->execute();
?>
<script type="text/javascript" src="../../intranet/jquery.js"></script>
<script language='javascript' type='text/javascript'>
	function fnc_preencher_solicitacao () {
		$("#"+arguments[0]).show();
		$("#"+arguments[0]).load('formulario_solicitacaov2_post.php', {'nr_registro': arguments[1], 'div_a_esconder': arguments[0]});
	}
	function fnc_mostrar_modalidades () {
		//alert (arguments[0]);
		$(".modalidade:not("+arguments[0]+")").hide();
		//$componente = arguments[0];
		$(arguments[0]).toggle();
	}
	function fnc_mostrar_editais () {
		//alert (arguments[0]);
		$(".edital:not("+arguments[0]+")").hide();
		$(arguments[0]).toggle();
	}
	$(document).ready(function(){
		$(".modalidade").hide();
		$(".edital").hide();
		$(".esconder").hide();
		<?php
			if (isset ($_GET["entidade"]) )
				{
					$entidade = $_GET["entidade"];
					echo "fnc_mostrar_modalidades('.modalidade_de_$entidade');";
					if (isset ($_GET["modalidade"]) )
						{
							$modalidade = $_GET["modalidade"];
							echo "fnc_mostrar_editais('.edital_de_".$modalidade."_modalidade_de_".$entidade."');";
						}
				}
		?>
	});
</script>
<table align='center' width='700' border="0" cellpadding="2" cellspacing="1" class='mytable'>
		<tr>
			<th height="31"><div align='center'>Avisos de Licita&ccedil;&otilde;es</div></th>
		</tr>
		<?php
			$cont = 1;
			while($row_entidades = $stmt_entidades->fetch (PDO::FETCH_ASSOC)) {
				$nm_entidade	= $row_entidades ["nm_entidade"];
				$quantidade		= $row_entidades ["quantidade"];
				$cd_entidade	= $row_entidades ["cd_entidade"];
				
				if ($cont % 2 == 0) {
					$classe = 'par';
				} else {
					$classe = 'impar';
				}
				
				echo "	<tr class='$classe entidade'>";
				echo "        <td height='22'><a href='#' id='.modalidade_de_".$cd_entidade."' OnClick=\"javascript: fnc_mostrar_modalidades(this.id)\"><b>$nm_entidade </b> </strong> ($quantidade ";
				if ($quantidade==1) {
					echo "edital";
				} else {
					echo "editais";
				}
				echo ")</a></td>";
				echo "   </tr>";
				echo "   <tr>";
				echo "		<td>";
				// Ler as modalidades desta entidade
				$sql_lerModalidades_ = "
select 
	count(cd_modalidade) as registros
from
	edital.modalidades
where
	cd_modalidade in (
		select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= TO_DATE(:data_atual, 'YYYY/MM/DD') 
			and st_cancelado <> 'S' 
			and st_suspenso = 'N' 
		group by
			edital.editais.cd_modalidade
)
				";
				//echo "<!--sql = ".$sql_lerModalidades."-->";
				$stmt_lerModalidades_ = $db->prepare($sql_lerModalidades_);
				$stmt_lerModalidades_->bindParam(":cd_entidade", $cd_entidade);
				$stmt_lerModalidades_->bindParam(":data_atual", $data_atual);
				$stmt_lerModalidades_->execute();
				$row_lerModalidades_ = $stmt_lerModalidades_->fetch(PDO::FETCH_ASSOC);
				$cont = $row_lerModalidades_["registros"];
				$stmt_lerModalidades_->closeCursor();
				if ($cont == 0) {
					echo "Erro: Nenhuma modalidade.";
				} else {
					echo "<table>";
					$sql_lerModalidades = "
select 
	cd_modalidade, ds_modalidade, nr_ordenacao
from
	edital.modalidades
where
	cd_modalidade in (
		select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= TO_DATE(:data_atual, 'YYYY/MM/DD') 
			and st_cancelado <> 'S' 
			and st_suspenso = 'N' 
		group by
			edital.editais.cd_modalidade
)
order by 
	nr_ordenacao
					";
					$stmt_lerModalidades = $db->prepare($sql_lerModalidades);
					$stmt_lerModalidades->bindParam(":cd_entidade", $cd_entidade);
					$stmt_lerModalidades->bindParam(":data_atual", $data_atual);
					$stmt_lerModalidades->execute();
					while($row_ler_modalidades = $stmt_lerModalidades->fetch(PDO::FETCH_ASSOC) ) {
						$cd_modalidade_	= $row_ler_modalidades["cd_modalidade"];
						$ds_modalidade_	= $row_ler_modalidades["ds_modalidade"];
						
						echo "	<tr class='modalidade modalidade_de_".$cd_entidade."'>";
						echo "		<td><a href='#' id='modalidade_de_".$cd_entidade."' OnClick=\"javascript: fnc_mostrar_editais('.edital_de_".$cd_modalidade_."_'+this.id)\"><b>";
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ds_modalidade_."</b></a><br>";
						// Procurar os editais desta entidade- modalidade
						$sql_editais_ = "
select 
	count (nr_registro) as registros
from 
	edital.editais 
where 
	cd_entidade= :cd_entidade 
	and cd_modalidade= :cd_modalidade_
	and dt_fim_disponivel >=TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and st_cancelado <> 'S' 
	and st_suspenso = 'N' 
						";
						$stmt_editais_= $db->prepare($sql_editais_);
						$stmt_editais_->bindParam(":cd_entidade", $cd_entidade);
						$stmt_editais_->bindParam(":cd_modalidade_", $cd_modalidade_);
						$stmt_editais_->bindParam(":data_atual", $data_atual);
						$stmt_editais_->execute();
						$row_editais_ = $stmt_editais_->fetch(PDO::FETCH_ASSOC);
						$cont_editais = $row_editais_["registros"];
						$stmt_editais_->closeCursor();
						if ($cont_editais == 0) {
							echo "Erro: nenhum edital.";
						} else {
							$i = 1;
							echo "<table>";
							$sql_editais = "
select (
	select 
		nm_etapa 
	from 
		edital.etapas 
	where 
		edital.etapas.cd_etapa= edital.editais.cd_etapa
	) as nm_etapa, 
	nr_registro, 
	cd_edital, 
	nr_ano, 
	dt_abertura, 
	hr_abertura, 
	cd_entidade, 
	edital.editais.cd_modalidade,
	ds_objeto, 
	nm_edital, 
	lk_edital,
	nm_proposta, 
	lk_proposta, 
	st_edital_pago, 
	st_cancelado 
from 
	edital.editais 
where 
	cd_entidade= :cd_entidade 
	and cd_modalidade= :cd_modalidade_
	and dt_fim_disponivel >=TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and st_cancelado <> 'S' 
	and st_suspenso = 'N' 
order by 
	cd_edital, cd_edital						
							";
							$stmt_editais = $db->prepare($sql_editais);
							$stmt_editais->bindParam(":cd_entidade", $cd_entidade);
							$stmt_editais->bindParam(":cd_modalidade_", $cd_modalidade_);
							$stmt_editais->bindParam(":data_atual", $data_atual);
							$stmt_editais->execute();
							while($row_editais = $stmt_editais->fetch(PDO::FETCH_ASSOC) ) {
								$nr_registro = $row_editais["nr_registro"];
								$cd_edital = $row_editais["cd_edital"];
								$nr_ano = $row_editais["nr_ano"];
								
								$dt_abertura = date("d/m/Y", strtotime($row_editais["dt_abertura"]));
								$hr_abertura = $row_editais["hr_abertura"];
								$cd_entidade = $row_editais["cd_entidade"];
								$cd_modalidade = $row_editais["cd_modalidade"];
								if (isset ($row_editais["tp_pregao"])) {
									$tp_pregao = $row_editais["tp_pregao"];
								}
								$ds_objeto = $row_editais['ds_objeto'];
								if (isset($row_editais["nm_edital"])) {
									$nm_edital = $row_editais["nm_edital"];
									$lk_edital = $row_editais["lk_edital"];
								} else {
									$nm_edital = '';
									$lk_edital = '';
								}
								if (isset ($row_editais["nm_proposta"])) {
									$nm_proposta = $row_editais["nm_proposta"];
								} else {
									$nm_proposta = "";
								}
								if (isset ($row_editais["lk_proposta"])) {
									$lk_proposta= $row_editais["lk_proposta"];
								} else {
									$lk_proposta = "";
								}
								$st_edital_pago = $row_editais["st_edital_pago"];
								$st_cancelado = $row_editais["st_cancelado"];
								$nm_etapa = $row_editais["nm_etapa"];

								if(($i % 2) == 1) $fundo="#F3F3F3";
								else $fundo="#CEEAD9";

								echo "<tr class='edital edital_de_".$cd_modalidade."_modalidade_de_".$cd_entidade."'>";
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
								echo "&nbsp;&nbsp;<b>Etapa: </b>".$nm_etapa;
								echo "<br>";
								echo "<b>Objeto: </b>";
								echo $ds_objeto;
								//Caso não exista arquivo de edital
								echo "<br>";
								echo "<br>";  
								echo "Download: ";
								if($nm_edital!= ""){
									//Para casos de editais pagos e não pagos
									$ip = $_SERVER["REMOTE_ADDR"];//HTTP_X_FORWARDED_FOR
									if ($st_edital_pago == 'S') {
										if (substr($ip, 0, 8) == '192.168.') {
											echo "<img src=\"imagens/file_locked.png\" width=\"18\" height=\"18\">";
											echo "&nbsp;";
											echo "<a href=\"restrito_empresa/acesso_emp.php\">Acesso Identificado</a>";
										}
									}
									if ($st_edital_pago == 'N') {
										echo "&nbsp;";
										echo "&nbsp;<a class='preenchimento_edital edital_".$cd_modalidade."_".$cd_entidade."' href=\"#\" OnClick=\"fnc_preencher_solicitacao('edital_".$cd_modalidade."_".$cd_entidade."_".$nr_registro."', '$nr_registro');\">Baixar preenchendo a solicitação</a>";
										if (substr($ip, 0, strlen("192.168.")) == "192.168." ) {
											echo "&nbsp;";
											$identificacao = base64_encode("1".$nr_registro);//1=Download de Edital
											echo "<!-- nome do arquivo do edital:  ".$nm_edital."-->";
											echo "<a href='downloadv_post.php?id=$identificacao' target=\"_blank\">Edital</a>"; 
										}
									}
								}	else {
									echo "nenhum arquivo adicionado";
								}
								//Caso exista arquivo para download da proposta
								if($nm_proposta != ""){
									$identificacao = base64_encode("2".$nr_registro);//1=Download de Proposta
									echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='downloadv_post.php?id=$identificacao' target=\"_blank\">Proposta</a>";
								}
								echo "<div id='edital_".$cd_modalidade."_".$cd_entidade."_".$nr_registro."' class='esconder'></div>";
								
								if ($st_cancelado == 'S') {
									echo " <font color='#ff0000'>OBS: $nm_modalidade CANCELADO(A).</font>";
								}

								echo "  </font></div></td>";
								echo "</tr>";
								$i++;
							}
							$stmt_editais->closeCursor();
							echo "</table>";
						}
						echo "		</td>";
						echo "	</tr>";
						// Término de Procurar os editais desta entidade- modalidade
					}
					$stmt_lerModalidades->closeCursor();
					echo "</table>";
				}
				// Término de Ler as modalidades desta entidade
				echo "		</td>";
				echo "	</tr>";
			}
		?>
	</table>

	<table width='90%' border="0" align="center" cellpadding="2" cellspacing="1">
		<tr>
			<td><br>
                                <?php
					if (substr($ip, 0, 13) == '192.168.27.74') {
                                            $fcamera1 = fopen("./camera/camera1.txt", "r");
                                            $camera1 = fread($fcamera1, 1);
                                            fclose($fcamera1);

                                            if ($camera1 == 'O'){
                                                echo '<img src="../../imagem/seta.png" width="18" height="18"><a href="http://192.168.24.115:9000" class="style4">Fechar camera 1</a>';
                                            } else {
                                                echo '<img src="../../imagem/seta.png" width="18" height="18"><a href="http://192.168.24.115:9000" class="style4">Abrir camera 1</a>';
                                            }
                                        } ?>
                                <br><br>
                                    <img src="../../imagem/seta.png" width="18" height="18"><a href="http://www.toledo.pr.gov.br/servicosPublicos/licitacao/camera/camera.php?cd_camera=1" target="_blank" class="style4">Sala 01 de licitação - Acesso Online com Audio</a>
                                <br><br>
                                <?php
					if (substr($ip, 0, 8) == '192.168.') { ?>
                                    <img src="../../imagem/seta.png" width="18" height="18"><a href="http://192.168.24.116:8000" class="style4">Sala 02 de licitação - Acesso Online</a>
                                <?php }  else
					if (substr($ip, 0, 8) == '172.16.') { ?>
                                    <img src="../../imagem/seta.png" width="18" height="18"><a href="http://192.168.24.116:8000" class="style4">Sala 02 de licitação - Acesso Online</a>
                                <?php } else { ?>
                                    <img src="../../imagem/seta.png" width="18" height="18"><a href="http://189.75.173.101:8000" class="style4">Sala 02 de licitação - Acesso Online</a>
                                <?php } ?>
                                <br><br>
                                * Problema na visualização do video: <a href="downloads/NetViewX_Too.exe"> Clique aqui, baixe e instale este complemento.</a>
                                <br><br>
								<strong>* ATENÇÃO: A partir do dia 04 de janeiro de  2012 será exigido para habilitação em todas as licitações, a apresentação da Certidão Negativa de débitos trabalhistas - CNDT, conforme artigo 29, V da Lei 8.666/93.</strong><br><br>
                                * Veja a rela&ccedil;&atilde;o de documentos para inscri&ccedil;&atilde;o e/ou renova&ccedil;&atilde;o do Cadastro de Licitantes do Munic&iacute;pio de Toledo.<a href="cadastro_fornecedores.php"> Documentação Necessária.</a><br><br>
				* Para visualizar os documentos disponibilizados neste sítio de licitação, &eacute; necess&aacute;rio que voc&ecirc; tenha o programa Adobe Acrobat Reader instalado em seu computador. <br>Caso n&atilde;o possua este programa, <a href="http://www.adobe.com/products/acrobat/readstep.html" target="_blank">clique aqui</a> para fazer o download gratuito.<br>
				<br>
				* Arquivos muito extensos encontram-se compactados em formato zip.<br>
                                Caso n&atilde;o possua o programa WinZip em seu computador, <a href="http://www.winzip.com/prod_down.htm" target="_blank">clique aqui</a> para fazer o download.<br><br>
				* É necessário que o javascript do navegador esteja habilitado.<br>
				<br>* <b>Versão atualizada do programa de preenchimento da proposta.</b> <a href='../../servicosPublicos/licitacao/downloads/20111228/EsProposta.exe'>Baixe aqui</a>.<br>
				<br>* <b>Versão atualizada do programa de preenchimento da cotação.</b> <a href='../../servicosPublicos/licitacao/downloads/20111228/EsProposta2009.exe'>Baixe aqui</a>.<br>
				<br>* <b>Manual de utilização dos programas para fornecedores.</b> <a href='../../servicosPublicos/licitacao/downloads/05092011/Manual de Preenchimento do EsProposta.pdf'>Baixe aqui</a>.<br>
				<br>* <b>Guia de caução.</b> <a href='../../servicosPublicos/licitacao/downloads/guia_de_calcao.doc'>Baixe aqui</a>.
				<br><br><br>
						* Os arquivos contidos nesta p&aacute;gina foram verificados pelo programa: <br>
						Trend</font><br><br>
						<strong>D&Uacute;VIDAS NO PREENCHIMENTO DA PROPOSTA, LIGUE:</strong><br>
					(45) 3055-8819 ou 
					<a href="mailto:pregaoeletronico@toledo.pr.gov.br">pregaoeletronico@toledo.pr.gov.br</a><br>
					<br>
					<strong>QUALQUER D&Uacute;VIDA SOBRE EDITAIS, LIGUE:</strong><br>
					(45) 3055-8819 ou <a href="mailto: licitacao@toledo.pr.gov.br"> licitacao@toledo.pr.gov.br</a><br><br>
				<?php
                                        //Configuração para acesso a Camera 01
					if (substr($ip, 0, 8) == '192.168.') {
						echo "<img src=\"../../imagem/file_locked.png\" width=\"18\" height=\"18\"><a href=\"loginIdentificado.php\" class=\"style4\">Acesso Identificado</a><br>";
					}
				?> <br>
		<?php
			if (substr($_SERVER["REMOTE_ADDR"],0,8)=='192.168.') {
				echo "<div align='center'><img src=\"../../imagem/file_locked.png\" width=\"18\" height=\"18\"><a href='/intranet/licitacao/index.php'>Acesso Administrativo</a></div>";
			}	  
		?>
			</td>
		</tr>
	</table>

<?php
require ($_caminho_intranet."licitacao/bottom.php");
?>
</body>
</html>
