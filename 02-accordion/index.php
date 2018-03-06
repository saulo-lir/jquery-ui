<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>

	</head>

	<body>		
			
		<div id='test_accordion'>

			<h3>Info 1</h3>
			<div>
				<p>
					Descrição 1...
				</p>
			</div>

			<h3>Info 2</h3>
			<div>
				<p>
					Descrição 2...
				</p>
			</div>

			<h3>Info 3</h3>
			<div>
				<p>
					Descrição 3...
				</p>
			</div>

		</div>	

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>			

			// accordion: Efeito de slidedown entre divs 

			$(function(){

				$('#test_accordion').accordion();

			});

		</script>
	</body>

</html>