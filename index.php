<?php

$router = "matrixController";

if(array_key_exists("router", $_GET)){
	$router = (string) $_GET["router"];
}

if(is_file("controller/{$router}.php")){
	require "controller/{$router}.php";
}else{
	echo "Rota não encontrada";
}
