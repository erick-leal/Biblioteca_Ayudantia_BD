<?php

function conectar(){

	$bd_host = '127.0.0.1';
	$bd_port = '5432';
	$bd_user = 'postgres';
	$bd_pass = 'jona1234';
	$bd_name = 'biblioteca';
	$con= pg_connect("host=$bd_host port =$bd_port dbname=$bd_name user=$bd_user password=$bd_pass") or die("Error de conexion. ". pg_last_error());
	
	return $con;

	}

	function Close($con){
		pg_close($con);
	}
?>
