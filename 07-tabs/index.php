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
			
		<h1>Tabs</h1>

		<div id='tabs'>

			<ul>
				<li><a href='#tabs-1'>Tab1</a></li> <!-- Quando o usuário clicar nessa tab, irá abrir o conteúdo da div de mesmo id (#tabs-1)-->
				<li><a href='#tabs-2'>Tab2</a></li>
				<li><a href='#tabs-3'>Tab3</a></li>				
			</ul>

			<div id='tabs-1'>
				<p>Text tab1...</p>
			</div>

			<div id='tabs-2'>
				<p>Text tab2...</p>
			</div>

			<div id='tabs-3'>
				<p>Text tab3...</p>
			</div>

		</div>
	

		
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-ui.min.js'></script>

		<script>						

			$(function(){								
				var tabs = $('#tabs').tabs(); // Apenas fazendo isso as tabs já funcionam
				
				tabs.find('.ui-tabs-nav').sortable({ // sortable = Perimte que o usuário manipule as tabs
					axis: 'x',
					stop:function(){
						tabs.tabs('refresh');
					}
				});
				
			});

		</script>
	</body>

</html>