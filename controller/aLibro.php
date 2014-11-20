<?php

include_once "conexion.php"; //Incluimos la conexión
//Recibimos los atributos de nuestro fomulario. 
if(isset($_POST["actualizar"])){  
$id_libro = trim($_POST["id_libro"]);
$titulo = trim($_POST["titulo"]);
$editorial = trim($_POST["editorial"]);
$descripcion = trim($_POST["descripcion"]);
$cant_pag = trim($_POST["cant_pag"]);
$num_ejemplares = trim($_POST["ejemplares"]);

// Nos aseguramos que no existan campos (o atributos) vacios.
if(!empty($id_libro) && !empty($titulo) && !empty($editorial) && !empty($descripcion) && !empty($cant_pag) && !empty($num_ejemplares))
{
    	$con = conectar();
        $consulta = "UPDATE LIBRO SET titulo_libro= '".$titulo."',editorial='".$editorial."',descripcion_libro = '".$descripcion."',cant_pag = '".$cant_pag."',num_ejemplares='".$num_ejemplares."' WHERE ID_LIBRO= ".$id_libro;
    $q = pg_query($con,$consulta);
		
    if(!empty($q)){
			pg_free_result($q);
			header("Location:../verLibro.php?id=".$id_libro);
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
