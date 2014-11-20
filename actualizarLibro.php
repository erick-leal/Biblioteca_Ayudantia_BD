<?php ?>
<html>
    <head>
        <title>Ingresar Libro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
    </head>
    <body>
        
        
<?php
include_once "./controller/conexion.php"; //Incluimos la conexión.
$id = $_GET["id"]; //Recibe por URL el id del libro a editar.
$conexion = conectar();
$consulta = "select id_libro,titulo_libro, cant_pag, editorial, descripcion_libro, num_ejemplares from libro where id_libro =".$id; 
$q = pg_query($conexion,$consulta); //Ejecutamos la consulta.
if($q)
{       

$p= pg_fetch_object($q); //Transformamos la consula a obejto.

?>        
        
       <form name="libro" action="./controller/aLibro.php" method="POST">
            <div>   Título Libro: <input type="text" name="titulo" value="<?php echo $p->titulo_libro; ?>" > </div>
            </br>
            <div>   Editorial: <input type="text" name="editorial" value="<?php echo $p->editorial; ?>"> </div>
            </br>
            <div>   Cantidad de Páginas: <input type="text" name="cant_pag" value="<?php echo $p->cant_pag; ?>"> </div>
            </br>
            <div>   Descripción: <input type="textarea" name="descripcion" value="<?php echo $p->descripcion; ?>"> </div>
            </br>
            <div>   Número de Ejemplares: <input type="text" name="ejemplares" value="<?php echo $p->num_ejemplares; ?>"> </div>
            </br>
	    <!-- Creamos un input invisible con el id del libro a editar.-->  
            <input type="hidden" value=<?php echo $p->id_libro ?> name="id_libro"> </td>
              
            <input type="submit" value="Actualizar" name="actualizar">
        </form>
<?php 
}
?>
</body>
