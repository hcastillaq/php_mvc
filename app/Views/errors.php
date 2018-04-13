
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content=ro"ie=edge">
	<title>Error</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i" 
	rel="stylesheet">
	<style>
		*{
			font-family: 'Roboto Condensed', sans-serif, Helvetica;
			font-style: italic;
			padding: 0px;
			margin: 0px;
			font-weight: 300;
			color: white;
		}
		header{
			background: #272727;
			color:white;
			padding: 20px;
		}

		body{
			background: #212121;
		}
		section{
			padding: 20px;
		}
	</style>
</head>
<body>
	<header>
			<h3>
					Error: <?php echo $error->getMessage();?>
			</h3>
	</header>
	<section>
				<h4>
					<?php echo $error->getFile();?>
			</h4>
			<h4>
					Línia: <?php echo $error->getLine();?>
			</h4>
	</section>
</body>
</html>

