<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
    body {
        background-image: url("https://i.pinimg.com/originals/e1/14/59/e11459aa973a9a5ec8950800b4e57608.png");
        background-size: 100% 100%; /* La imagen de fondo se ajusta automáticamente al tamaño de la página */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        background-position: center; /* Centra la imagen en el fondo */
        height: 100vh; /* Ajusta la altura del cuerpo al 100% del viewport */
    }
</style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="mb-3">
                    <a href="http://localhost/articulo/insertar.php" class="btn btn-secondary">Regresar </a>
                </div>
                <?php
                    include "sql.php";
                    include "articulo.php";

                    $a = new articulo();
                    echo $a->table();
                    ?>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.7.1.min.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script>
        function actualizar(id)
        {
            location.href="actualizar.php?id="+id+ "&r="+ Math.random();
        }
        function eliminar(id)
        {
            location.href="eliminar.php?id="+id+ "&r="+ Math.random();
        }
    </script>

</body>
</html>