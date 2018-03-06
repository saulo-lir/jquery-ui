<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>

		<style>
		
			#block{
				width:100px;
				height:150px;
				border: 2px solid #235ded;				
				background-color: #235ded;
				color: white;
				text-align: center;
			}

			#droppable{
				width:100px;
				height:150px;
				border: 2px solid #eddc94;				
				background-color: #eddc94;
				color: #12b367;
				text-align: center;
			}

			#container{
				width:600px;
				height:400px;
				border: 2px solid #235ded;
			}

			
		</style>

	</head>

	<body>		
	
		<div id='container'>

			<div id='block'>
				<p>draggable</p>

				<p>Start:<span id='start'></span></p>

				<p>Drag:<span id='drag'></span></p>

				<p>Stop:<span id='stop'></span></p>
			</div>

			<div id='droppable'>
				<p>droppable</p>
				
			</div>
			
		</div>	
		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>			

			$(function(){
				var start = 0;
				var drag = 0;
				var stop = 0;

				/* Draggable: Efeito de arrastar e soltar um elemento */

				$('#block').draggable({
					containment: '#container', // Define qual elemento será o limite do elemento que pode ser movido
					start: function(){ // Captura o evento de início do movimento
						$('#start').html(start++);

					},
					drag: function(){ // Captura o evento de movimento
						$('#drag').html(drag++);

					},
					stop: function(){ // Captura o evento de término do movimento
						$('#stop').html(stop++);

					}
				});

				/* Droppable: É uma função ativada quando soltamos um elemento draggable. A partir desse momento é possível executar uma ação */

				$('#droppable').droppable({
					accept: '#block', // Indica que esse elemento só irá aceitar o elemento de id #block

					hoverClass: function(){	// Executa uma ação ao passar o elemento em cima
						$(this).css('background-color', '#edb059');
					},

					activeClass: function(){ // Executa uma ação no momento em que clicamos e arrastamos o elemento
						$(this).css('background-color', 'blue');
					},

					drop: function(event, ui){ // Executa uma ação ao soltar o elemento
					// event: captura os dados contidos no elemento droppable
					// ui: captura os dados do elemento draggable (o que está sendo largado em cima)

						console.log(ui.draggable[0]); // ui.draggable[0] = representa exatamente o elemeto html que estamos manipulando

						// ui.draggable[0].id = seleciona os ids do elemento
						// ui.draggable[0].className = seleciona as classes do elemento

						//console.log(event);

						$(this).css('background-color', '#ed7c12');
						$(this).html('Ok!');
					}
				
				});

			});

		</script>
	</body>

</html>