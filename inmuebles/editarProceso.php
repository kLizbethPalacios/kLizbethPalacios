<?php
    //print_r($_POST);
    if(!isset($_POST['oculto'])){
        header('Location: index.php');
    }

    include 'modelauto/conexion.php';
    $id2 = $_POST['id2'];
    $inmueble2 = $_POST['txt2Inmueble'];
    $direccion2 = $_POST['txt2Dirección'];

    $sentencia = $bd->prepare("UPDATE inmuebles SET nombre_inmueble = ?, direccion = ? WHERE idInmueble = ?");
    $resultado = $sentencia->execute([$inmueble2,$direccion2,$id2]);

    if ($resultado === TRUE){
        header('Location: index.php');
    }else{
        echo "Error";
   }
?>
