<?php

include("db.php");

if(isset($_POST['save'])){
    $img = $_FILES['img']['name'];
    $ruta = $_FILES["img"]["tmp_name"];
    $destino = "img/".$img;
    copy($ruta,$destino);
    $nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $iden = $_POST['iden'];
    $desc = $_POST['desc'];

    $query = "INSERT INTO productos(nombreimagen,rutaimg,nombre,precio,id,descripcion) 
    VALUES('$img', '$destino', '$nom', $pre, $iden, '$desc')";
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