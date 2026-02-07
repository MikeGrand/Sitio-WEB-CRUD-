<?php
include "sql.php";
include "articulo.php";

$a=new articulo();
$id=isset($_GET["id"])?$_GET["id"]: "";

$obj = $a->buscar($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
            </div>
            <div class="col-12 col-sm-4 mt-3">
                <div class="mb-3">
                    <label for="id" class="form-label">ID:</label>
                    <input type="text" class="form-control" id="id">
                </div>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Costo:</label>
                    <input type="text" class="form-control" id="costo">
                </div>
                <div class="d-grid">
                    <button type="button" class="btn btn-primary" id="button1" > Eliminar </button>
                </div>
            </div>
            <div class="col-12 col-sm-4" >
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="modalInsert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title" > Informacion </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body" > 
                    <p id="insertText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secundary" data-bs-dismiss="modal">OK</button>

                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.7.1.min.js" ></script>
    <script>
        (function () {
            $("#button1").click(function(){
                var id = $("#id").val();
                var nom = $("#nom").val();
                var costo = $("#costo").val();

                var error="";

                if(id==""){
                    error += "falta ID <br>";
                }
                
                if(nom==""){
                    error += "falta Nombre <br>";
                }
                
                if(costo==""){
                    error += "falta Costo <br>";
                }

                
            if(error==""){
                var dir ="http://localhost/articulo/procesos.php?tipo=3&id="+id+"&nom="+nom+"&costo="+costo+"&r="+Math.random();
                $.get(dir,function(result){
                    location.href = "mostrar.php"; // Redirecciona a mostrar.php
                });
            }
            else
            {
                $("#insertText").html(error);
                $("#modalInsert").modal("show");
            }
            });
        })();
    </script>
</body>
</html>