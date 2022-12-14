<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style_adm.css" type="text/css" media="screen"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script>
function vallogin()
{
document.forlogar.login.focus()
}
</script>

</head>

<body onload="vallogin()">
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
<table align="center">
<form action="valida_login.php" method="post" name="forlogar">
<tr>
<td>Login:</td><td><input type="text" name="login" id="login" size="5"/></td>
</tr>
<tr>
<td>Senha:</td><td><input type="password" name="senha" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Entra" size="5"/></td>
</tr>
</form>
</table>
</div><!--fim div centro-->

</div><!--fim div esquerda-->

<div id="direita">

</div><!--fim div direita-->
</div><!--fim div esdi-->
<div id="rodape"></div><!--fim div rodape-->
</div><!--fim div layout-->

</body>
</html>