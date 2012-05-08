<script>
	$(':checkbox').click(function(e) {								
		$(':checkbox').each(function(i){			
			if(e.currentTarget.id != this.id)
				this.checked = false;			
		});						
	});	
	$('tr').click(function(e) {				
		if (e.target.type !== 'checkbox') {
			$(':checkbox', this)[0].click();
		}		
	});	
	$('tr').dblclick(function(e) {						
		$(':checkbox', this)[0].checked = true;
		$('a[href*="manutencao"][class*="ajax-action"]').click();
	});
</script>
<?php
if (Kohana::$profiling === TRUE) {
    $benchmark = Profiler::start('grid','render');
}
foreach($links as $link) {
    echo $link.'&nbsp;';    
}

if(count($links) > 0) {
	echo '<br/><br/>';
}
echo '<table style="width: 90%">';

echo '<thead class="table-head">';
echo '    <tr>';
echo '        <th width="25"></th>';
foreach($columns as $column) {
    echo '        <th width="'.$column->width.'">',$column->title,'</th>';
}
echo '    </tr>';
echo '</thead>';

echo '<tbody>';
foreach($dataset as $data) {
    $id = array();
	$colunas = '';
	echo '    <tr>';    
    foreach($columns as $column) {
        if($column->chave) {
			$id[] = $column->render($data);
	    }
	    $colunas .= '        <td>'.$column->render($data).'</td>';
    }
	$colunas = '        <td>'.Form::checkbox('seleciona', null, null, array('id' => implode(',', $id ))).'</td>'.$colunas;
	echo $colunas;
    echo '    </tr>';	
}
echo '</tbody>';
echo '</table>';

if (isset($benchmark)) {
    Profiler::stop($benchmark);
}