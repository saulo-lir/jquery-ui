<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>

	</head>

	<body>		
			
		<h1>Autocomplete</h1>

		<input type='text' id='autocomplete' >

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){

				var autocomplete = [
					'Javascript',
					'Jquery',
					'CSS',
					'Html',
					'PHP'
				];

				$('#autocomplete').autocomplete({
					source: autocomplete // Fonte de palavras pré definidas
				});

			});

		</script>
	</body>

</html>