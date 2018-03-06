<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>
		<style>
			
		</style>

	</head>

	<body>		
			
		<h1>Tooltip</h1>

		<!-- O Tooltip é últil quando precisamos ensinar o usuário a usar nosso site mostrando balões interativos --> 

		<!-- O elemento title de nossas tags é onde irá conter os textos das animações -->

		<p>There are various ways to customize the animation of a tooltip.</p>

		<p>You can use the <a id="show-option" href="http://jqueryui.com/demos/tooltip/#option-show" title="slide down on show">show</a> and
		<a id="hide-option" href="http://jqueryui.com/demos/tooltip/#option-hide" title="explode on hide">hide</a> options.</p>

		<p>You can also use the <a id="open-event" href="http://jqueryui.com/demos/tooltip/#event-open" title="move down on show">open event</a>.</p>

	

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){								
				
				$('#show-option').tooltip({
					show:{
						effect: 'slideDown', // Existem diversos efeitos. Consultar documentação
						delay: 250
					}

				});

				$('#hide-option').tooltip({
					hide:{
						effect: 'explode',
						delay: 250
					}
				});

				$('#open-event').tooltip({
					show: null,
					position:{
						my: 'left top',
						at: 'left bottom'
					},
					open: function(event, ui){
						ui.tooltip.animate({top: ui.tooltip.position().top + 10}, 'low');
										// Posição inicial + distância que irá percorrer
					}
				});
				
			});

		</script>
	</body>

</html>