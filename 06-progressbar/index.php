<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>
		<style>
			.ui-progressbar{
				position: relative;
			}

			.progressbar-label{
				position: absolute;
				left: 50%;
				top: 4px;
				font-weight: bold;
				text-shadow: 1px 1px 0 #FFF;
			}
		</style>

	</head>

	<body>		
			
		<h1>Progressbar</h1>

		<div id='progressbar'>
			<div class='progressbar-label'>
				Loading...
			</div>
		</div>		

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){								

				$('#progressbar').progressbar({

					value: false, // Porcentagem da barra que será incrementada

					change: function(){	// Quando setarmos um valor novo
						$('.progressbar-label').text($('#progressbar').progressbar('value') + '%');
					},

					complete: function(){	// Quando o progresso completar 100%, será executada essa função

						$('.progressbar-label').text('Complete!');
					}

				});


				// Função criada apenas para teste. Numa aplicação real, o progressbar será executado em outras ocasiões, como upload de fotos, requisições ajax, etc.

				function progress(){
					var val = $('#progressbar').progressbar('value') || 0;
					$('#progressbar').progressbar('value', val + 2); // Incrementando a porcentagem da barra

					if(val < 99){
						setTimeout(progress, 80 ); // 80 milésimos
					}
				}

				setTimeout(progress, 2000) // 2 segundos
				
			});

		</script>
	</body>

</html>