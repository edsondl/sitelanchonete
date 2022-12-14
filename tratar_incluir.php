<?php
include("conectar.php");
$tipo=$_POST["tipo"];
$nome_prato=$_POST["nome_prato"];
$descricao=$_POST["descricao"];
$imagem = $_FILES["foto"];
$arquivo = isset($imagem) ? $imagem:FALSE;
if ($arquivo){

preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$arquivo["name"],$ext);
$nomez=substr(md5(uniqid(time())),0,10);
$nome2=$nomez.$ext[0];
move_uploaded_file($arquivo["tmp_name"], "fotos/".$nome2);

mysql_query("INSERT INTO cardapio (tipo, nome, descricao, foto) VALUES ('$tipo','$nome_prato','$descricao','$nome2')");
}
header("Location:atualiza_cardapio.php");

mysql_close($conexao);
?>