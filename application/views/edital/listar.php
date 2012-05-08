<?php 
echo Form::open('menu');
$grid = new Grid;
$grid->link('link')->action('index.php/edital/manutencao')->text('Incluir Menu')->property(array('class' => 'ajax-action'));
$grid->column()->field('cd_editais')->title('Edital')->width(100)->chave(true);
$grid->column()->field('cd_etapa')->title('Etapa');
$grid->column()->field('cd_modalidade')->title('Modalidade');
/*$grid->action_field('cd_editais')                //the field, that will be passed to the link as a parameter
			->label('Editar')                     //Column label
			->url('index.php/edital/manutencao') //the uri for building the link
			->action('Manutencao'); */                // the row text
$grid->link('cd_editais')->action('index.php/edital/manutencao')
	->text('alterar')->property(array('class' => 'ajax-action'));
$grid->data($kohana_view_data);
echo $grid;
echo Form::close();
?>