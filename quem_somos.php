<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
<title>Lanchonete Bendita Gula</title>
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.lite.min.js"></script>

		<script type="text/javascript" src="js/js_menu/sliding_effect.js"></script>

<script type="text/javascript">  

     $(document).ready(function() {  

       $('#jquery').cycle({  
           fx:'fade',  });   });  

</script>


<script src="js/min.js" type="text/javascript"></script>
<script type= "text/javascript">/*<![CDATA[*/



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

	color:#fff;

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
            	<li class="sliding-element"><a href="index.php">HOME</a></li>
                <br/>
                <li class="sliding-element"><h3>MENU</h3></li>
                <li class="sliding-element"><a href="cardapio.php">CARDAPIO</a></li>
                <li class="sliding-element"><a href="quem_somos.php">QUEM SOMOS</a></li>
                <li class="sliding-element"><a href="delivery.php">DELIVERY</a></li>
                
            </ul>
        </div><!--fim div navigation-block-->

<!-- Facebook Badge START --><a href="http://pt-br.facebook.com/people/Bendita-Gula/100003621011543" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #FFF; text-decoration: none;" title="Bendita Gula">Bendita Gula</a><br/><a href="http://pt-br.facebook.com/people/Bendita-Gula/100003621011543" target="_TOP" title="Bendita Gula"><img src="http://badge.facebook.com/badge/100003621011543.550.26570348.png" style="border: 0px;" /></a><br/><a href="http://pt-br.facebook.com/badges/" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #FFF; text-decoration: none;" title="Crie seu próprio atalho!">Criar seu atalho</a><!-- Facebook Badge END -->

</div><!--fim div imagens-->

<div id="centro">
<center><h1>Quem Somos</h1></center>
	<div id="texto">
    A lanchonete Bendita gula é uma empresa que <br/>
    atua no ramo de alimentos com sucos, salgados, <br/>
    lanches e Bolos de infinitas variedades feitos<br/>
    mediante encomenda.<br/><br/><br/>
    
	Alem de trabalharmos na época de páscoa com<br/>
    cestas e ovos de páscoa de diversos tamanhos<br/>
    e sabores.<br/><br/><br/>
    
    Estamos localizados na Rua Coronel Tibério<br/>
    Meira Nº175 defronte a Inspetoria da Fazenda.<br/><br/><br/>
    
	Atuamos a mais de 10 anos sempre<br/> 
    buscando melhora nossos serviços para atender<br/> 
    melhor nossos clientes.
    
    </div><!--fim div texto-->
    <div id="jquery">
    <img src="imagens/q1.jpg">
    <img src="imagens/q2.JPG">
    <img src="imagens/q3.JPG">
    <img src="imagens/q4.JPG">
    <img src="imagens/q5.JPG">
    
    </div><!--fim div jquery-->
    
</div><!--fim div centro-->

</div><!--fim div esquerda-->

<div id="direita">

<div class="sc_menu_wrapper">

	<div class="sc_menu">

	    <a title="Bolos" href="bolos.php"><img src="imagens/bolos.gif" alt="Bolos"/></a>
		<a title="Salgados" href="salgados.php"><img src="imagens/salgados.gif" alt="Salgados"/></a>
        <a title="Sucos" href="sucos.php"><img src="imagens/sucos.gif" alt="Sucos"/></a>
		<a title="Quem Somos" href="quem_somos.php"><img src="imagens/lanchonete_fotos.gif" alt="Quem Somos"/></a>
	   
	</div><!--fim div sc_menu-->

</div><!--sc_menu_wrapper-->

</div><!--fim div direita-->
</div><!--fim div esdi-->
<div id="rodape"></div><!--fim div rodape-->
</div><!--fim div layout-->

</body>
</html>