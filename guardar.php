<?php

include("db.php");

if(isset($_POST['save'])){
    // $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $img = $_POST['img'];
    $nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $iden = $_POST['iden'];
    $desc = $_POST['desc'];

    $query = "INSERT INTO productos(imagen,nombre,precio,id,descripcion) 
    VALUES('$img', '$nom', $pre, $iden, '$desc')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje'] = "No se pudo guardar";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Producto Agregado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: crearproductos.php");
}
?>