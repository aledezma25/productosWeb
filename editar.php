<?php
include("db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE id = $id"; 
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $img = $row['nombreimagen'];
        $ruta = $row['rutaimg'];
        $nom = $row['nombre'];
        $pre = $row['precio'];
        $id = $row['id'];
        $desc = $row['descripcion'];
    }
}   
if(isset($_POST['edit'])){
    $img = $_FILES['img']['name'];
    $ruta = $_FILES['img']['tmp_name'];
    $destino = "img/".$img;
    copy($ruta,$destino);
    $nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $iden = $_POST['iden'];
    $desc = $_POST['desc'];
    $query = "UPDATE productos SET nombreimagen='$img', rutaimg='$destino', nombre='$nom', precio=$pre, id=$iden, descripcion='$desc' WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje'] = "No se pudo editar";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje'] = "No se pudo editar";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    else{
        $_SESSION['mensaje'] = "Edicion exitosa!";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: productos.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miselania</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Editar un producto</a>
    </div>
</nav>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
         <form action="editar.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
            <div class="mb-3">
                            <td><img src="<?php echo $row['rutaimg'] ?>" width="120" height="140"></td><br><br>
                            <label for="img" class="form-label">Nueva imagen</label>
                            <input type="file" id="img" name="img" class="form-control" value="<?php echo $img; ?>" required/>
                            <!-- <input type="submit" name="submit" value="UPLOAD"/> -->
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nombre:</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $nom; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="pre" class="form-label">Precio:</label>
                            <input type="number" id="pre" name="pre" class="form-control"  value="<?php echo $pre; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="iden" class="form-label">Id del Producto:</label>
                            <input type="number" id="iden" name="iden" step="any" class="form-control"  value="<?php echo $iden; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Descripción:</label>
                            <input type="text" id="desc" name="desc" class="form-control"  value="<?php echo $desc; ?>" required>
                        </div>
                <input type="submit" class="btn btn-success btn-block" name="edit" value="Editar">
                <a href="productos.php" class="btn btn-danger" id="btncancelar">Cancelar</a>
         </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


