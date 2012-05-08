<?php

    $objects_html = '';
    foreach($items as $item) {
        $objects_html .= vsprintf("<li>%s : %s</li>\n", 
                array($item->obinv, $item->obobject));
    }
    
    echo $objects_html;
?>