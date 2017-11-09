<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bienvenido</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i" 
	rel="stylesheet">
	<style>
		*{
			margin:0px;
			padding:0px;
			font-family: 'Roboto Condensed', sans-serif, Helvetica;
		}
		section{
			width: 100%;
			height: 100vh;
			background: white;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 1.5em;
			font-weight:200;
			font-style: italic;
			color: #8a8a8a;
		}
	</style>
</head>
<body>
	<section>
		<span>"<?php echo $message; ?>"</span>
	</section>
</body>
</html>