<html>
	<head>
		<meta charset='utf-8'>
		<title>Jquery UI</title>
		<link rel='stylesheet' href='css/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/jquery-ui.theme.min.css'>

	</head>

	<body>		
			
		<h1>Dialog</h1>

		<div id='dialog' title='Teste Dialog' style='display:none;'>
			<p>Isto é um dialog default</p>
		</div>

		<button id='btn'>Dialog</button>

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){								

				$('#btn').click(function(){

					$('#dialog').dialog();

				});

			});

		</script>
	</body>

</html>