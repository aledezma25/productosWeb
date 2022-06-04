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
    <!-- <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" /> -->
    <link rel="stylesheet" type="text/css" href="estilotabla.css" media="screen" />
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="hstack gap-3">
            <div class="container">
                <a class="navbar-brand"></a>
            </div>
            <!-- <div class="container">
                <a href=" " class="navbar-brand">Lista de productos</a>
            </div> -->
            <!-- <br><br><br> -->
            <div class="container">
                <a href="crearproductos.php" class="navbar-brand" id="agg">Crear nuevo producto</a>
            </div>
        </div>
        <!-- <nav class="navbar bg-dark">
        <div class="container-fluid">
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        </div>
        </nav> -->
    </nav>
            <?php if(isset($_SESSION['mensaje'])) {?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?> alert-dimissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            <?php session_unset();}?>
            <div class="col-md-8">
            <!-- class="table table-bordered" -->
            <table id="main-container">
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
                            <td><img src="<?php echo $row['rutaimg'] ?>" width="120" height="140"></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td>$<?php echo $row['precio'] ?></td>
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
</body>
</html>