<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miselania</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Agrega un nuevo producto!</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="guardar.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="img" class="form-label">Nueva imagen</label>
                            <input type="file" id="img" name="img" required/>
                            <!-- <input type="submit" name="submit" value="UPLOAD"/> -->
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nombre:</label>
                            <input type="text" id="nom" name="nom" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="pre" class="form-label">Precio:</label>
                            <input type="number" id="pre" name="pre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="iden" class="form-label">Id del Producto:</label>
                            <input type="number" id="iden" name="iden" step="any" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Descripción:</label>
                            <input type="text" id="desc" name="desc" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Agregar Producto">

                        <a href="productos.php" class="btn btn-danger" id="btncancelar">Cancelar</a>
                    </form>
                </div>
                
            </div>
            <div class="col-md-8">
                <a href="productos.php" class="btn btn-slide" id="btnvolver">Volver a la lista de productos </a>
            </div>
        </div>
    </div>

                
    </div>
    
</body>
</html>