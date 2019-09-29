<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Facilita - Problema 1</title>
        <link rel="shortcut icon" href="src/css/favicon.png">	
		<link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/site.css">
	</head>
	<body>
        <ul id="nav">
			<li><a href="index.php?view=main&controller=matrixController">Atualizar</a></li>
		</ul>
		<div class="container">
			<?php
                if($_GET){
                    $view = $_GET['view'];
                    include $view. '.php';
                }else{
                    include "main.php";
                }
			?>
		</div>
		<div id="footer"><small><?php echo date('Y'); ?> - todos os direitos reservados</small></div>		
	</body>
</html>