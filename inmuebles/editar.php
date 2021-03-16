<?php 

    if(!isset($_GET['id'])){
        header('Location: index.php');
    }

    include 'modelauto/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM inmuebles WHERE idInmueble = ?;");
    $sentencia->execute([$id]);
    $personal = $sentencia->fetch(PDO::FETCH_OBJ);
    


?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Inmueble</title>
    <meta charset="UTF-8">
</head>
<body>
    <center>
        <h3>Editar inmueble:</h3>
        <form method="POST" action="editarProceso.php">
         <table>
                <tr> 
                    <td>Nombre del inmueble:</td>
                    <td><input type="text" name="txt2Inmueble" value="<?php echo $personal->nombre_inmueble;?>"></td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><input type="text" name="txt2Dirección" value="<?php echo $personal->direccion;?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $personal->idInmueble;?>">
                   <td colspan="2"><input type="submit" value="Editar Inmueble"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>