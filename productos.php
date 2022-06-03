<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="hstack gap-3">
            <div class="container">
                <a href="index.php" class="navbar-brand">Productos</a>
            </div>
            <div class="container">
                <a href="crearproductos.php" class="navbar-brand">Crear nuevo producto</a>
            </div>
        </div>
    </nav>
    
            <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Id_Producto</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query ($conn,$query);
                    while($row = mysqli_fetch_array($result)){?>
                        <tr>
                            <td><img scr="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['precio'] ?></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td>   
                                <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody> 
                </table>  
            </div>
        </div>    
    </div>
<!-- <script src="validar.js"></script -->
</body>
</html>