<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM productos WHERE id = $id"; 
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje'] = "No se pudo Eliminar";
        $_SESSION['tipo_mensaje'] = "danger";
        die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Producto eliminado";
        $_SESSION['tipo_mensaje'] = "info";
    }
    header("Location: productos.php");
}

?>
