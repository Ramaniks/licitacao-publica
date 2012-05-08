<?php 
echo Form::open('menu/manutencao');
echo Form::hidden('menu_id', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->menu_id); 
echo Form::label('descricao', 'Descrição'); 
echo Form::input('descricao', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->descricao, array('required' => 'true')); 
?>
<br/>
<?php 
echo Form::label('link', 'Link'); 
echo Form::input('link', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->link, array('required' => 'true')); 
?><br/>
<?php 
echo Form::label('pai_id', 'Pai'); 
echo Form::select('pai_id', $aMenus, empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->pai_id); 
?><br/>
<?php 
echo Form::label('ordem', 'Ordem'); 
echo Form::input('ordem', empty($kohana_view_data['editar']) ? null : $kohana_view_data['editar']->ordem); 
?><br/>
<?php 
echo Form::submit('submit', 'Confirmar');
echo Form::close();
 