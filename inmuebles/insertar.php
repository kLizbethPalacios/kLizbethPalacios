<?php
    if(!isset($_POST['oculto'])){
        exit();
    }

    include 'modelauto/conexion.php';
    $inmueble = $_POST['txtInmueble'];
    $direccion = $_POST['txtDirección'];

    $sentencia = $bd->prepare("INSERT INTO inmuebles(nombre_inmueble,direccion) VALUES (?,?);");
    $resultado = $sentencia->execute([$inmueble,$direccion]); 

    if ($resultado === TRUE) {
        //echo "Insertado correctamente";
        header('Location: index.php');
    }else{
        echo "Error";
    }

?>