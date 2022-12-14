<?php
include "conectar.php";
$login=$_POST["login"];
$senha=$_POST["senha"];
$resultado = mysql_query("SELECT * FROM administrador WHERE login = '$login'");
$linhas = mysql_num_rows($resultado);

if ($linhas ==0){//verificando o usuario
	
	echo "USUARIO ".$login." NAO ENCONTRADO!";
}
else{
	if ($senha != mysql_result($resultado, 0 ,"senha"))//verificando a senha
	{
	echo "senha invalida";
	}
	else{
		setcookie("nome_usuario",$login);
		setcookie("senha_usuario",$senha);
		header ("Location: centro.php");
		
	}



}
mysql_close($conexao);





?>
