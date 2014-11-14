

<?php ?>
<html>
    <head>
        <title>Ver Libro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
    </head>
    <body>


        <?php
        include_once "./controller/conexion.php";
        $id = $_GET["id"];
        $conexion = conectar();
        $consulta = "select titulo_libro, cant_pag, editorial, descripcion_libro, num_ejemplares from libro where id_libro =" . $id;
        $q = pg_query($conexion, $consulta);
        if ($q) {

            $p = pg_fetch_object($q);
            ?>         <div>   Título Libro:  <?php echo $p->titulo_libro; ?> </div>
            </br>
            <div>   Editorial:  <?php echo $p->editorial; ?>  </div>
            </br>
            <div>   Cantidad de Páginas: <?php echo $p->cant_pag; ?> </div>
            </br>
            <div>   Descripción:  <?php echo $p->descripcion; ?> </div>
            </br>
            <div>   Número de Ejemplares:  <?php echo $p->num_ejemplares; ?> </div>
            </br>

    <?php
}
?>
    </body>
</html>