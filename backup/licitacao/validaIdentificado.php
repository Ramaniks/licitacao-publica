<?php
/**Valdecir:14/07/2008:Modificado para pasta principal e alteração para Identificado*/
session_start();

if (!isset($_SESSION["nm_login"]))
{
   header("Location:loginIdentificado.php"); //é o login
}

?>