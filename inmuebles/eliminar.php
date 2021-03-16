<?php 
   // print_r($_GET);
   if(!isset($_GET['id'])){
    exit();
}

$codigo = $_GET['id'];
include 'modelauto/conexion.php';
$sentencia =$bd->prepare("DELETE FROM inmuebles WHERE idInmueble =?;");
$resultado = $sentencia->execute([$codigo]);

if($resultado === TRUE){
    header('Location: index.php');
}else{
    echo"Error";
}

?>