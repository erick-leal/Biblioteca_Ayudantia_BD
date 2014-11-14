<?php

include_once "conexion.php";

if(isset($_POST["ingresar"])){  

$titulo = trim($_POST["titulo"]);
$editorial = trim($_POST["editorial"]);
$descripcion = trim($_POST["descripcion"]);
$cant_pag = trim($_POST["cant_pag"]);
$num_ejemplares = trim($_POST["ejemplares"]);

if(!empty($titulo) && !empty($editorial) && !empty($descripcion) && !empty($cant_pag) && !empty($num_ejemplares))
{
    	$con = conectar();
        $consulta = "INSERT INTO LIBRO(titulo_libro,editorial,descripcion_libro,cant_pag,num_ejemplares) values('".$titulo."','".$editorial."','".$descripcion."','".$cant_pag."','".$num_ejemplares."')"; 
    $q = pg_query($con,$consulta);
		
    if(!empty($q)){
			pg_free_result($q);
			$consultaid = "SELECT MAX(id_libro) as id FROM libro";
                        $q = pg_query($con,$consultaid);
                        $p= pg_fetch_object($q);
                        $id=$p->id;
                        header("Location:../verLibro.php?id=".$id);
                        pg_free_result($q);
			Close($con);
		} else{
			
                        pg_free_result($q);
			Close($con);
			header("Location:../index.php");
                        
		}
                
}else
{
    
    echo "Campos vacios" ;
}
}
?>