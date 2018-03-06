<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>

	</head>

	<body>		
			
		<h1>Datepicker</h1>

		<input type='text' id='datepicker' >

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){

				// Inicializando
				$('#datepicker').datepicker();

				// Efeitos				
				$('#datepicker').datepicker('option','showAnim', 'slideDown');
				$('#datepicker').datepicker('option','showAnim', 'drop');
				$('#datepicker').datepicker('option','showAnim', 'fold');

			});

		</script>
	</body>

</html>