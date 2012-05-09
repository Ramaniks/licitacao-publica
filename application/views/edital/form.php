
<?php

	$ip = $_SERVER["REMOTE_ADDR"];
//var_dump($kohana_view_data);
?>

<script type="text/javascript">
	function confirmaExclusaoEdital(cd_edital, nr_ano, ds_modalidade, ds_entidade, nr_registro){  
		if (confirm("Deseja mesmo excluir o edital: "+ds_modalidade+" "+cd_edital+"/"+nr_ano+", da entidade "+ds_entidade+"?\nTodas as informações serão perdidas.")){  
			 window.open("excluir_edital.php?nr_registro="+nr_registro)
		}  
	} 
	</script>
	<script type="text/javascript">
	function confirmaInativacaoEdital(cd_edital, nr_ano, ds_modalidade, ds_entidade, nr_registro, st_suspenso){  
		if (confirm("Deseja mesmo suspender o edital: "+ds_modalidade+" "+cd_edital+"/"+nr_ano+", da entidade "+ds_entidade+"?\nEle não aparecerá mais no site.")){  
			 window.open("altera_status_edital.php?nr_registro="+nr_registro+"&st_suspenso="+st_suspenso)
		}  
	} 
	function confirmaAtivacaoEdital(cd_edital, nr_ano, ds_modalidade, ds_entidade, nr_registro, st_suspenso){  
		if (confirm("Deseja mesmo rehabilitar o edital: "+ds_modalidade+" "+cd_edital+"/"+nr_ano+", da entidade "+ds_entidade+"?\nEle aparecerá novamente no site.")){  
			 window.open("altera_status_edital.php?nr_registro="+nr_registro+"&st_suspenso="+st_suspenso)
		}  
	} 
	jQuery(function($){
		 $(".formattimestamp").mask("99/99/9999 99:99");
		 $(".formatdate").mask("99/99/9999");
		 $(".formattime").mask("99:99");
		 $(".formatcnpj").mask('99.999.999/9999-99');
	});
</script>

<!-- Validações por javascript -->
<script language='javascript' type='text/javascript'>
function valida()
{
  if (document.cadastro.cd_edital.value == "")
  {
     alert("Informe o número do edital");
	 document.cadastro.cd_edital.focus();
	 return false;
  }
  if (document.cadastro.nr_ano.value == "")
  {
     alert("Informe o ano do edital");
	 document.cadastro.nr_ano.focus();
	 return false;
  }
  if (document.cadastro.dt_abertura.value == "")
  {
     alert("Informe a data de abertura");
	 document.cadastro.dt_abertura.focus();
	 return false;
  }  
  if (document.cadastro.hr_abertura.value == "")
  {
     alert("Informe a hora de abertura");
	 document.cadastro.hr_abertura.focus();
	 return false;
  }   
  if (document.cadastro.ds_objeto.value == "")
  {
     alert("Informe o objeto do edital");
	 document.cadastro.ds_objeto.focus();
	 return false;
  }  
  if (document.cadastro.dt_inicio.value == "")
  {
     alert("Informe da data de inicio do edital");
	 document.cadastro.dt_inicio.focus();
	 return false;
  }
}function Contar(Campo){
  if((4000-Campo.value.length) <= 0){
     alert('Atenção! Você atingiu o limite máximo de caracteres!');
     Campo.value = Campo.value.substr(0,4000);
  }
  document.getElementById("Qtd").innerText = 4000-Campo.value.length
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		document.cadastro.cd_edital.focus();
	});
</script>

<table width="760" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" align="center">
	<tr>
    <th bordercolor="#009933" bgcolor="#ffffff" scope="row">
			<table width='535' border='0' cellpadding='0' cellspacing='0' bordercolor='#FFFFFF' align='center'>
				<tr>
					<th bordercolor='#009933' bgcolor='#ffffff'>
<?php	
		/*foreach($kohana_view_data as $data){				
			echo $data->nr_edital;//."-".$data->cd_editais;	
		}*/
?>
					<!-- Aqui começa o cadastro dos dados. a parte de cima do html é padrão de todos os sistemas -->
						<?php echo Form::open('index.php/edital/save', array('enctype' => 'multipart/form-data'), array('submit'=>'return valida();')); ?>
							<?php //echo "Novo: ".$edital->nr_edital; ?>
							<?php echo Form::hidden('editando', empty($kohana_view_data['cd_edital']) ? null : $kohana_view_data['cd_edital']); ?>
							<?php echo Form::hidden('edital_antigo', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->menu_id); ?>
							<?php echo Form::hidden('proposta_antigo', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->menu_id); ?>
							<div class='cabecalho'>
								Cadastro de Editais
							</div>
							<div class='cadastro'>
								<!--<label class='cadastro'>Número: </label>-->
									<?php echo form::label('nr_edital', '* Número:'); ?> 
									<?php echo Form::input('nr_edital', empty($kohana_view_data['nr_edital']) ? null : $kohana_view_data['nr_edital'], array('required' => 'true', 'size' =>'10', 'maxlength' => '6')); ?>
								<!--<label class='cadastro'>Ano: </label>-->
									<?php echo form::label('nr_ano', '* Ano:'); ?>
									<?php echo Form::input('nr_ano', empty($kohana_view_data['nr_ano']) ? null : $kohana_view_data['nr_ano'], array('required' => 'true', 'size' =>'10', 'maxlength' => '4')); ?><br>
								<!--<label class='cadastro'>Data Abertura: </label>-->
									<?php echo form::label('dt_abertura', '* Data Abertura:'); ?>
									<?php echo Form::input('dt_abertura', empty($kohana_view_data['dt_abertura']) ? null : $kohana_view_data['dt_abertura'], array('required' => 'true','class' => 'formatdate', 'size' =>'20', 'maxlength' => '10')); ?> dd/mm/aaaa<br>
								<!--<label class='cadastro'>Hora Abertura: </label>-->
									<?php echo form::label('hr_abertura', '* Hora Abertura:'); ?>
									<?php echo Form::input('hr_abertura', empty($kohana_view_data['hr_abertura']) ? null : $kohana_view_data['hr_abertura'], array('required' => 'true','class' => 'formattime', 'size' =>'16', 'maxlength' => '5')); ?> hh:mm<br>
								<!--<label class='cadastro'>Entidades: </label>-->
									<?php echo form::label('cd_entidade', '* Entidade:'); ?>
								    <?php echo Form::select('cd_entidade', ORM::factory('entidades', empty($kohana_view_data['cd_entidade']) ? null : $kohana_view_data['cd_entidade'])->order_by('nm_entidade')->find_all()->as_array('cd_entidade','nm_entidade'), /*Arr::get($post, 'entidades'),*/ array('style' => 'width: 220px;', 'class' => 'form_contato')); ?><br>
								<!--<label class='cadastro'>Modalidades: </label>-->
									<?php echo form::label('cd_modalidade', '* Modalidade:'); ?>
								    <?php echo Form::select('modalidades', ORM::factory('modalidades', empty($kohana_view_data['cd_modalidade']) ? null : $kohana_view_data['cd_modalidade'])->order_by('nm_modalidade')->find_all()->as_array('cd_modalidade','nm_modalidade'), /*Arr::get($post, 'entidades'),*/ array('style' => 'width: 220px;', 'class' => 'form_contato')); ?><br>
								<label class='cadastro'>Objeto: </label><textarea name="ds_objeto" cols="45" rows="20" id="ds_objeto"><?php if (isset ($ds_objeto)) {echo $ds_objeto;} ?></textarea><br><!--Quantidade restante de caracteres <div id="Qtd">4000</div>-->
									<?php echo form::label('nm_edital', 'Selecione o arquivo do Edital em seu computador para realizar o envio:'); ?><br /> 
										<?php echo form::input('nm_edital', '', array('id' => 'nm_edital', 'type' => 'file', 'class' => 'form_contato', 'size' =>'50', 'maxlength' => '2000')); ?> <br>
									<?php echo form::label('nm_proposta', 'Selecione o arquivo do Edital em seu computador para realizar o envio:'); ?><br /> 
										<?php echo form::input('nm_proposta', '', array('id' => 'nm_proposta', 'type' => 'file', 'class' => 'form_contato', 'size' =>'50', 'maxlength' => '2000')); ?> <br>
								<label class='cadastro'>Data Publicação Inicial: </label>
									<?php echo Form::input('dt_inicio', empty($kohana_view_data['dt_inicio']) ? null : $kohana_view_data['dt_inicio'], array('required' => 'true','class' => 'formatdate', 'size' =>'20', 'maxlength' => '10')); ?> dd/mm/aaaa<br>
									<?php echo Form::hidden('st_edital_pago', 'N'); ?>
									<?php echo Form::hidden('cd_etapa', '1'); ?>
									<br>
									<?php echo Form::submit('submit', 'Gravar');?>&nbsp;&nbsp;<?php echo Form::submit('button', 'Voltar');?>
									<!--<input type="submit" value="   Gravar   ">&nbsp;&nbsp;<input type='button' value=' Voltar ' onClick="javascript:history.back(-1)">-->
									<?php
										if (isset ($st_cancelado)) {
											if ($st_cancelado == 'N') {
												echo "&nbsp;&nbsp;<input name= 'cancelar' type='submit' value='Cancelar'>";
											} else {
												echo "&nbsp;&nbsp;<input name= 'cancelar' type='submit' value='Reabrir'>";
											}
										}
//									echo "<input type='button' value='Excluir' onclick=\"javascript: confirmaExclusaoEdital('".$cd_edital."','".$nr_ano."', '".$ds_modalidade."', '".$ds_entidade."', '".$nr_registro."');\">";
										if (isset ($st_suspenso)) {
											if ($st_suspenso == 'N') {
												//echo "<input type='button' value='Suspender' onclick=\"javascript: confirmaInativacaoEdital('".$cd_edital."','".$nr_ano."', '".$ds_modalidade."', '".$ds_entidade."', '".$nr_registro."', 'S');\">";
											} else {
												//echo "<input type='button' value='Rehabilitar' onclick=\"javascript: confirmaAtivacaoEdital('".$cd_edital."','".$nr_ano."', '".$ds_modalidade."', '".$ds_entidade."', '".$nr_registro."', 'N');\">";
											}
										}
//									echo "<input type='button' value='Excluir' onclick=\"javascript: confirmaInativacaoEdital('".$cd_edital."','".$nr_ano."', '".$ds_modalidade."', '".$ds_entidade."', '".$nr_registro."');\">";
									?>
								</div>
						<?php echo Form::close(); ?>
					<!-- Aqui termina o cadastro dos dados. a parte de baixo do html é padrão de todos os sistemas. Observar a aprte de baixo para fechar as conexões com os bancos de dados -->
					</th>
				</tr>
			</table>
		</th>
	</tr>
</table>
