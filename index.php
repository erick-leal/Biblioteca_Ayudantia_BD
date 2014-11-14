<html>
    <head>
        <title>Ingresar Libro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
    </head>

    <body>
</br></br>

<?php 

include_once "./controller/conexion.php";

$conexion = conectar();

$consulta = "select id_libro,titulo_libro, cant_pag, editorial, descripcion_libro, num_ejemplares from libro";
$q = pg_query($conexion,$consulta);
if($q)
{

?>
	<table border=1 cellpadding="8px">
	<tr>
	 <th>Titulo</th>
	 <th>Cantidad de Páginas</th>
         <th>Editorial </th>
         <th>Descripción</th>
         <th>Número de Ejemplares</th>
         <th>Editar</th>
         <th>Eliminar</th>
	 </tr>
<?php
while ($p= pg_fetch_object($q)){
	
?>	 	
		<tr>
		<td> <a href="verLibro.php?id= <?php echo $p->id_libro;?>"> <?php echo $p->titulo_libro; ?> </a></td>
		<td> <?php echo $p->cant_pag;?></td>
		<td> <?php echo $p->editorial;?></td>
		<td> <?php echo $p->descripcion_libro;?></td>
		<td> <?php echo $p->num_ejemplares;?></td>
                <td> <a href="actualizarLibro.php?id= <?php echo $p->id_libro;?>">Editar</a></td>
                <td> <a href="actualizarLibro.php?id= <?php echo $p->id_libro;?>">Eliminar</a></td>
                
                
		</tr>	
			
<?php
	
	 }
Close($conexion);

}else
{
echo "no funciona";
}
?>

        </table>
    
    </body>
</html>
