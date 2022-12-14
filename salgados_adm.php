<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style_adm.css" type="text/css" media="screen"/>
<title>Documento sem título</title>
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
<img src="imagens/botao_grande_salgados.png" width="583" height="50" title="sucos" alt="sucos"/>
<a href="centro.php"><img src="imagens/voltar.png" width="100" height="30" title="voltar" alt="voltar"/></a>

<!-- Nome do adiministrador e logoff-->
<?php $login= $_COOKIE["nome_usuario"];
$senha = $_COOKIE["senha_usuario"];
echo "<p align='right'> Seja bem vindo, $login <a href='index.php'><b><font color='white' size='4'>SAIR</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>";

?>



<!-- cardapio aparecendo na tela com a possibilidade de altera e apagar itens-->
<?php
	include("conectar.php");
	
	$resultado=mysql_query("SELECT * FROM cardapio WHERE tipo ='salgados' ORDER BY cod_produto DESC LIMIT 30 ");
	
	
	
$linhas=mysql_num_rows($resultado);

for($i=0;$i<$linhas;$i++){
	$reg=mysql_fetch_array($resultado);
			
				echo"
			
			<table>
			<tr>
			<td>
				
			<img width='250' height='160' src=fotos/".$reg[4]."
			</td>
			<td>
			<table>
			<form action='atualiza_salgados.php' method='post'>	
			<tr>
				<td> <input type='hidden' value='$reg[0]' name='codigo'/></td>
			</tr>
		
		 	<tr>
				<td><font color='black'>Nome:</font></td>
				<td><font color='black' size='3'><b><input type='text' value='$reg[2]' name='nome'/></b></font></td>
			</tr>
		 	<tr>
				<td> <font color='black'>Descricao do produto</font></td>
				<td><font color='black'  size='3'><b><input type='text' value='$reg[3]' name='descricao'/></b></font></td>
			</tr>
			<tr>
				<td colspan='2'> <font color='black'>Mudar Imagem</font></td>
			</tr>
			<tr>	
				<td colspan='2'><font color='black' size='3'><input type='file' name='foto'/></font></td>
			</tr>
		 	<tr>
				<td><input type='submit' value='Salvar'/></td>
		 		</form>
				<td><form action='deletar_salgados.php' method='post' ENCTYPE='multipart/form-data'>
		 		<input type='hidden' value='$reg[0]' name='exclu'/>
		 		<input type='submit' value='apagar'/></form></td>
		 
		 </tr>
		 
							</table></td></tr></table>		
									
									";
			
	
									}
									
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