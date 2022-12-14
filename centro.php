<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style_adm.css" type="text/css" media="screen"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>centro</title>
</head>

<body>
<div id="layout">
<div id="topo">

</div><!--fim div topo-->

<div id="esdi">
<div id="esquerda">
<div id="endereco">
</div><!--fim div endereco-->

<div id="imagens">
</div><!--fim div imagens-->
<div id="centro">
<a href="atualiza_cardapio.php"><img src="imagens/novo_item.png" width="250" height="30" title="Inseri Novo Item" alt="Inseri Novo Item"/></a>

<?php 
if(isset($_COOKIE["nome_usuario"]))
$login = $_COOKIE["nome_usuario"];
if(isset($_COOKIE["senha_usuario"]))
$senha = $_COOKIE["senha_usuario"];

if(isset($login) and isset($senha))

{
	//echo "Voce efetuou o loguin";	
}
else{
	echo "<script type='text/javascript' language='javascript'>
alert ('Efetue o login');
</script>";
	echo "Voce nao efetuou o loguin";
	header("Location: administrador.php");
	
	
}

?>

<?php
echo "<p align='right'> Seja bem vindo, $login <a href='index.php'><b><font color='white' size='4'>SAIR</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>";

?>





</div><!--fim div centro-->

</div><!--fim div esquerda-->

<div id="direita">
<h2>CARDAPIO</h2>
<a href="sucos_adm.php"><img src="imagens/sucos.png" width="170" height="30" title="sucos" alt="sucos"/></a>
<a href="salgados_adm.php"><img src="imagens/salgados.png" width="170" height="30" title="salgados" alt="salgados"/></a>
<a href="bolos_adm.php"><img src="imagens/bolos.png" width="170" height="30" title="bolos" alt="bolos"/></a>
<a href="lanches_adm.php"><img src="imagens/lanches.png" width="170" height="30" title="lanches" alt="lanches"/></a>
<a href="ovos_de_pascoa_adm.php"><img src="imagens/ovos_de_pascoa.png" width="170" height="30" title="ovos de páscoa" alt="ovos de páscoa"/></a>

</div><!--fim div direita-->
</div><!--fim div esdi-->
<div id="rodape"></div><!--fim div rodape-->
</div><!--fim div layout-->

</body>
</html>