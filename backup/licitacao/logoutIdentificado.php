<?php 
/**Valdecir:14/07/2008:Modificado para pasta principal e alteração para Identificado*/
require ("validaIdentificado.php");
 
session_destroy(); 

header("Location:index_editalv3.php");
?>