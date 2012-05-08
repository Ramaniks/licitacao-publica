h1>Lista de Posts ( <?php echo html::anchor('index.php/edital/form', 'Adicionar novo'); ?> )</h1>

<?php foreach($kohana_view_data as $post){ ?>
     <h2><?php echo $post->cd_editais; ?></h2>
     <p>
         <?php echo $post->cd_etapa; ?>
     </p>
     <span>
        <?php echo html::anchor('index.php/edital/form/'.$post->cd_editais, '[ Editar ] '); ?>
        <?php echo html::anchor('index.php/edital/delete/'.$post->cd_editais, '[ Excluir ] '); ?>                          
    </span>
    <hr />     
<?php } ?>
<br><br>
<?php

    $objects_html = '';
    foreach($items as $item) {
        $objects_html .= vsprintf("<li>%s : %s</li>\n", 
                array($item->obinv, $item->obobject));
    }
    
    echo $objects_html;
?>