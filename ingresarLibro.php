<?php ?>
<html>
    <head>
        <title>Ingresar Libro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
    </head>
    <body>
        <form name="libro" action="./controller/iLibro.php" method="POST">
                <div>   Título Libro: <input type="text" name="titulo" > </div>
                </br>
                <div>   Editorial: <input type="text" name="editorial" > </div>
                </br>
                <div>   Cantidad de Páginas: <input type="text" name="cant_pag" > </div>
                </br>
                <div>   Descripción: <input type="textarea" name="descripcion" > </div>
                </br>
                <div>   Número de Ejemplares: <input type="text" name="ejemplares"> </div>
                </br>
                <input type="submit" value="Ingresar" name="ingresar">
            </form>
    </body>

</html>