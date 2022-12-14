<?php
include ("conectar.php");
$cod_produto=$_POST["codigo"];
$nome=$_POST["nome"];
$descricao=$_POST["descricao"];
$imagem = $_FILES["foto"];
$arquivo = isset($imagem) ? $imagem:FALSE;
if ($arquivo){
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$arquivo["name"],$ext);
$nomez=substr(md5(uniqid(time())),0,10);
$nome2=$nomez.$ext[0];
move_uploaded_file($arquivo["tmp_name"], "fotos/".$nome2);

mysql_query("UPDATE cardapio SET nome='$nome', descricao='$descricao', foto='$nome2' WHERE cod_produto='$cod_produto'");
}
header("Location:ovos_de_pascoa_adm.php");



mysql_close($conexao);
?>