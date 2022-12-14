<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style_adm.css" type="text/css" media="screen"/>
<title></title>
<script>
function valnome()
{
var camponome=document.getElementById('nome').value;
if(camponome==""){
	alert("Atenção o campo nome esta vazio");
	}
}

</script>

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
<?php $login= $_COOKIE["nome_usuario"];
$senha = $_COOKIE["senha_usuario"];
echo "<p align='right'> Seja bem vindo, $login <a href='index.php'><b><font color='white' size='4'>SAIR</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>";

?>

<form action="tratar_incluir.php" name="forinseri" method="post"  ENCTYPE="multipart/form-data">
<table border="3">
<tr>
<td>
Tipo do Produto</td><td><select name="tipo">
<option></option>
<option id="sucos">Sucos</option>
<option id="salgados">Salgados</option>
<option id="bolos">Bolos</option>
<option id="lanches">Lanches</option>
<option id="ovos">Ovos</option>
</select>
</td></tr>
<tr>
<td>
Imagem do prato:</td><td><input type="file" size="30" name="foto"/></td>
</tr>
<tr>
<td>Nome:</td><td><input type="text" name="nome_prato" id="nome" size="38" onblur="valnome()"/></td>
</tr>
<tr>
<td>Descrição:</td><td><textarea name="descricao" cols="30" rows="10"></textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="enviar"/></td>
</tr>
</table>

</form>
<a href="centro.php">Voltar</a>

</div><!--fim div centro-->

</div><!--fim div esquerda-->

<div id="direita">


</div><!--fim div direita-->
</div><!--fim div esdi-->
<div id="rodape"></div><!--fim div rodape-->
</div><!--fim div layout-->




</body>
</html>
