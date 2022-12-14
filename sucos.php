<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
<title>Sucos</title>
		<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/js_menu/sliding_effect.js"></script>
		<script type= "text/javascript">



function makeScrollable(wrapper, scrollable){

	// Obter elementos jQuery

	var wrapper = $(wrapper), scrollable = $(scrollable);

	

	// Ocultar imagens até que eles não são carregados

	scrollable.hide();

	var loading = $('<div class="loading">Loading...</div>').appendTo(wrapper);

	

	// Definir a função que irá verificar se todas as imagens são carregadas

	var interval = setInterval(function(){

		var images = scrollable.find('img');

		var completed = 0;

		

		// Conta o número de imagens que são carregadas com sucesso

		images.each(function(){

			if (this.complete) completed++;	

		});

		

		if (completed == images.length){

			clearInterval(interval);

			// Timeout adicionado para corrigir problema com o Chrome

			setTimeout(function(){

				

				loading.hide();

				// Remove barras de rolagem	

				wrapper.css({overflow: 'hidden'});						

				

				scrollable.slideDown('slow', function(){

					enable();	

				});					

			}, 1000);	

		}

	}, 100);

	

	function enable(){

		// Altura da área no topo, no fundo, que não respondem ao movimento do mouse

		var inactiveMargin = 99;					

		// Cache para o desempenho

		var wrapperWidth = wrapper.width();

		var wrapperHeight = wrapper.height();

		// Usando altura exterior de modo a incluir também o preenchimento

		var scrollableHeight = scrollable.outerHeight() + 2*inactiveMargin;

		// Criar uma dica de ferramenta invisível

		var tooltip = $('<div class="sc_menu_tooltip"></div>')

			.css('opacity', 0)

			.appendTo(wrapper);

	

		// Salve títulos de menu

		scrollable.find('a').each(function(){				

			$(this).data('tooltipText', this.title);				

		});

		

		// Remover tooltip padrão

		scrollable.find('a').removeAttr('title');		

		// Remover padrão tooltip no IE

		scrollable.find('img').removeAttr('alt');	

		

		var lastTarget;

		//Quando o usuário mova o mouse sobre menu de			

		wrapper.mousemove(function(e){

			// Salvar destino

			lastTarget = e.target;



			var wrapperOffset = wrapper.offset();

		

			var tooltipLeft = e.pageX - wrapperOffset.left;

			// Não deixe dica para sair do menu.

			// Porque overflow é definido como oculto, não seremos capazes também vê-lo 

			tooltipLeft = Math.min(tooltipLeft, wrapperWidth - 75); //tooltip.outerWidth());

			

			var tooltipTop = e.pageY - wrapperOffset.top + wrapper.scrollTop() - 40;

			//Mover dica sob o mouse quando estamos na maior parte do menu

			if (e.pageY - wrapperOffset.top < wrapperHeight/2){

				tooltipTop += 80;

			}				

			tooltip.css({top: tooltipTop, left: tooltipLeft});				

			

			// Navegue pelo menu

			var top = (e.pageY -  wrapperOffset.top) * (scrollableHeight - wrapperHeight) / wrapperHeight - inactiveMargin;

			if (top < 0){

				top = 0;

			}			

			wrapper.scrollTop(top);

		});

		

		// Definir intervalo ajuda a resolver problemas de desempenho no IE

		var interval = setInterval(function(){

			if (!lastTarget) return;	

										

			var currentText = tooltip.text();

			

			if (lastTarget.nodeName == 'IMG'){					

				// Eu tenho dados anexados a um link, não imagem

				var newText = $(lastTarget).parent().data('tooltipText');



				//Mostrar dica com o novo texto

				if (currentText != newText) {

					tooltip

						.stop(true)

						.css('opacity', 0)	

						.text(newText)

						.animate({opacity: 1}, 1000);

				}					

			}

		}, 200);

		

		// Ocultar dica ao sair do menu

		wrapper.mouseleave(function(){

			lastTarget = false;

			tooltip.stop(true).css('opacity', 0).text('');

		});			

		


	}

}

	

$(function(){	

	makeScrollable("div.sc_menu_wrapper", "div.sc_menu");

});

</script>


<style>
div.sc_menu_wrapper {

	position: relative; 	

	height: 470px;

	width: 195px;

	margin-top: 30px;

	overflow: auto;

}

div.sc_menu {

	padding: 15px 0;

}

.sc_menu a {

	display: block;

	margin-bottom: 5px;

	width: 195px;

	border: 2px rgb(79, 79, 79) solid;

    -webkit-border-radius: 4px;

    -moz-border-radius: 4px;		

	color: #fff;

	background: rgb(79, 79, 79);	

}

.sc_menu a:hover {

	border-color: rgb(130, 130, 130);

	border-style: dotted;

}

.sc_menu img {

	display: block;

	border: none;

}



.sc_menu_wrapper .loading {

	position: absolute;

	top: 50px;

	left: 10px;

	margin: 0 auto;

	padding: 10px;

	width: 200px;
	
	height:350px;

    -webkit-border-radius: 4px;

    -moz-border-radius: 4px;	

	text-align: center;

	color: #fff;

	border: 1px solid rgb(79, 79, 79);

	background: #1F1D1D;

}



.sc_menu_tooltip {

	display: block;

	position: absolute;

	padding: 6px;

	font-size: 12px;	

	color: #fff;

	-webkit-border-radius: 4px;

    -moz-border-radius: 4px;	

	border: 1px solid rgb(79, 79, 79);

	background: rgb(0, 0, 0);	

	background: rgba(0, 0, 0, 0.5);

}


#back {

	margin-left: 8px;

	color: gray;

	font-size: 18px;

	text-decoration: none;

}

#back:hover {

	text-decoration: underline;

}


</style>

</head>

<body>
<div id="layout">
<div id="topo">
<a href="index.php"><img src="imagens/logo2.jpg" /></a>
</div><!--fim div topo-->

<div id="esdi">
<div id="esquerda">
<div id="endereco">
  
</div><!--fim div endereco-->

<div id="imagens">
<div id="navigation-block">
        	
         
            <ul id="sliding-navigation">
                <li class="sliding-element"><h3>MENU</h3></li>
                <li class="sliding-element"><a href="sucos.php">Sucos</a></li>
                <li class="sliding-element"><a href="salgados.php">Salgados</a></li>
                <li class="sliding-element"><a href="bolos.php">Bolos</a></li>
                <li class="sliding-element"><a href="lanches.php">Lanches</a></li>
                <li class="sliding-element"><a href="ovos_de_pascoa.php">Ovos de Páscoa</a></li>
				<img src="imagens/delivery02.jpg" width="170" height="80" title="delivery" alt="delivery"/>

            </ul>
        </div><!--fim div navigation-block-->
</div><!--fim div imagens-->

<div id="centro">
<img src="imagens/botao_grande_sucos.png" width="583" height="50" title="Lanches" alt="Lanches"/>

<?php
	include("conectar.php");
	
	$resultado=mysql_query("SELECT * FROM cardapio WHERE tipo ='sucos' ORDER BY cod_produto DESC LIMIT 30 ");
	
	
	
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
			
			
		
		 <tr><td><font color='black'>Nome:</font></td><td><font color='black' size='3'><b> $reg[2]</b></font></td></tr>
		 <tr><td> <font color='black'>Descricao do produto</font></td><td><font color='black' size='3'><b> $reg[3]</b></font></td></tr>
		 
							</table></td></tr></table>		
									
									";
			
	
									}
									
	?>

</div><!--fim div centro-->

</div><!--fim div esquerda-->

<div id="direita">
<div class="sc_menu_wrapper">

	<div class="sc_menu">

	    <a title="Bolos" href="#"><img src="imagens/bolos.gif" alt="Bolos"/></a>
		<a title="Salgados" href="#"><img src="imagens/salgados.gif" alt="Salgados"/></a>
        <a title="Sucos" href="#"><img src="imagens/sucos.gif" alt="Sucos"/></a>
		<a title="Quem Somos" href="#"><img src="imagens/lanchonete_fotos.gif" alt="Quem Somos"/></a>
		<img src="imagens/delivery02.jpg" width="170" height="80" title="delivery" alt="delivery"/>	   
	</div><!--fim div sc_menu-->
</div><!--fim div direita-->
</div><!--fim div esdi-->
<div id="rodape"></div><!--fim div rodape-->
</div><!--fim div layout-->




</body>
</html>
