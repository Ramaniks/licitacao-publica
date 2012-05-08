<?php
	$ip = $_SERVER["REMOTE_ADDR"];

?>

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
		$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$dia = gmdate("d", $data_servidor);
		$mes = gmdate("m", $data_servidor);
		$ano = gmdate("Y", $data_servidor);
		$data_atual = $ano."/".$mes."/".$dia;

		$dataEntidades = DB::select(array('COUNT("*")', 'quantidade'),	array('editais.cd_entidade', 'cd_entidade'), 
	             array('nm_entidade', 'nm_entidade'))
		  ->from('editais')		 
		  ->join('entidades')->on('entidades.cd_entidade', '=', 'editais.cd_entidade')
		  ->where("dt_inicio_disponivel", "<=", array("$data_atual"))
		  ->and_where("dt_fim_disponivel", ">=", array("$data_atual"))
		  ->and_where("st_cancelado", "<>", array('S'))
		  ->and_where("st_suspenso", "=", array('N'))
		  ->group_by("editais.cd_entidade", "nm_entidade")
		  ->order_by('nm_entidade')
		  ->execute()
		  ->as_array();

			foreach($dataEntidades as $entidade) {
				$quantidade		= $entidade["quantidade"];
				$cd_entidade	= $entidade["cd_entidade"];
				$nm_entidade	= $entidade["nm_entidade"];
				
				if ($cont % 2 == 0) 
				{
					$classe = 'par';
				} else 
				{
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
				// Ler as modalidades desta entidade (string)
				$contaModalidades =  DB::select(array('COUNT("*")', 'registros'))
					->from("modalidades")
					->where("cd_modalidade", "in", 
					array(DB::select('editais.cd_modalidade')
						  ->from('editais') 
						  ->where('cd_entidade','=', array($cd_entidade))
						  ->and_where('dt_fim_disponivel', '>=', array($data_atual))
						  ->and_where('st_cancelado', '<>', 'S')
						  ->and_where('st_suspenso', '=', 'N')
						  ->group_by('editais.cd_modalidade')))
					->execute();
					//->as_array();
				$cont = $contaModalidades["registros"];
				if ($cont == 0) {
					echo "Erro: Nenhuma modalidade.";
				} else {
					echo "<table>";
				
				$dataModalidades = DB::select('cd_modalidade', 'nm_modalidade', 'nr_ordenacao')
					->from('modalidades')
					->where('cd_modalidade', 'in',
						array(DB::select('editais.cd_modalidade')
						->from('editais')
						->where('cd_entidade', '=', array($cd_entidade))
						->and_where('dt_fim_disponivel', '>=', array($data_atual))
						->and_where('st_cancelado', '<>', 'S')
						->and_where('st_suspenso', '=', 'N')
						->group_by('editais.cd_modalidade')))
					->order_by('nr_ordenacao')
					->execute();
					foreach($dataModalidades as $row_ler_modalidades) {
						$cd_modalidade_	= $row_ler_modalidades["cd_modalidade"];
						$ds_modalidade_	= $row_ler_modalidades["nm_modalidade"];
						
						echo "	<tr class='modalidade modalidade_de_".$cd_entidade."'>";
						echo "		<td><a href='#' id='modalidade_de_".$cd_entidade."' OnClick=\"javascript: fnc_mostrar_editais('.edital_de_".$cd_modalidade_."_'+this.id)\"><b>";
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ds_modalidade_."</b></a><br>";
						// Procurar os editais desta entidade- modalidade
						$contaEditais = DB::select(array('COUNT("*")', 'registros'))
						 ->from('editais')
						 ->where('cd_entidade', '=', array($cd_entidade))
						 ->and_where('cd_modalidade', '=', array($cd_modalidade_))
						 //->and_where('dt_fim_disponivel', '>=', array($data_atual))
						 ->and_where('st_cancelado', '<>', 'S')
						 ->and_where('st_suspenso', '=', 'N')
						 ->execute();
						$cont_editais = $contaEditais["registros"];
						if ($cont_editais == 0) {
							echo "Erro: nenhum edital.";
						} else {
							$i = 1;
							echo "<table>";
							

							$dataEditais = DB::select('nm_etapa', /*'nr_registro',*/ 'cd_editais',
								'nr_ano', 'dt_abertura', 'hr_abertura',	'cd_entidade', 'editais.cd_modalidade',
								'ds_objeto', 'nm_edital', 'lk_edital', 'nm_proposta', 'lk_proposta', 
								'st_edital_pago', 'st_cancelado')
							->from('editais')
							->join('etapas')->on('etapas.cd_etapa', '=', 'editais.cd_etapa')
							->where('cd_entidade', '=', array($cd_entidade)) 
							->and_where('cd_modalidade', '=', array($cd_modalidade_))
							//->and_where('dt_fim_disponivel', '>=', array($data_atual)) 
							->and_where('st_cancelado',  '<>', 'S') 
							->and_where('st_suspenso', '=', 'N') 
							->order_by('cd_editais')
							->execute();
							foreach($dataEditais as $row_editais) {
								$nr_registro = $row_editais["cd_editais"];
								$cd_edital = $row_editais["cd_editais"];
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
									echo "&nbsp;";
									echo "&nbsp;<a class='preenchimento_edital edital_".$cd_modalidade."_".$cd_entidade."' href=\"#\" OnClick=\"fnc_preencher_solicitacao('edital_".$cd_modalidade."_".$cd_entidade."_".$nr_registro."', '$nr_registro');\">Baixar preenchendo a solicita��o</a>";
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
							//$stmt_editais->closeCursor();
							echo "</table>";
						}
						echo "		</td>";
						echo "	</tr>";
						// Término de Procurar os editais desta entidade- modalidade
					}
					//$stmt_lerModalidades->closeCursor();
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
								<strong>* ATENÇÃO: A partir do dia 04 de janeiro de  2012 será exigido para habilitação em todas as licitações, a apresentação da Certidão Negativa de débitos trabalhistas - CNDT, conforme artigo 29, V da Lei 8.666/93.</strong><br><br>
                                * Veja a rela&ccedil;&atilde;o de documentos para inscri&ccedil;&atilde;o e/ou renova&ccedil;&atilde;o do Cadastro de Licitantes do Munic&iacute;pio de Toledo.<a href="cadastro_fornecedores.php"> Documenta��o Necess�ria.</a><br><br>
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
			</td>
		</tr>
	</table>