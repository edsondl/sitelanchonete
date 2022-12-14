<?php
include "conectar.php";
$codigo=$_POST["exclu"];
mysql_query("DELETE FROM cardapio WHERE cod_produto='$codigo'");
header ("Location: lanches_adm.php");


?>