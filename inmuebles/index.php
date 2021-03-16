<?php
    include 'modelauto/conexion.php';
    $sentencia = $bd->query("SELECT * FROM inmuebles;");
    $inmuebless = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($inmuebless);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title> Listado de inmuebles </title>
    <meta charset="utf-8">
    
</head>
<body>
    <center> 
         <h3>Listado de inmuebles</h3>
        <table>
            <tr>
                <td>Código</td>
                <td> Nombre del inmueble </td>
                <td>Dirección</td>
                <td>Editar</td>
                <td>Eliminar</td>

         </tr>

         <?php
            foreach ($inmuebless as $dato) {
                ?>
                <tr>
                    <td><?php echo $dato->idInmueble;?></td>
                    <td><?php echo $dato->nombre_inmueble;?></td>
                    <td><?php echo $dato->direccion;?></td>
                    <td><a href="editar.php?id=<?php echo $dato->idInmueble;?>">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $dato->idInmueble;?>">Eliminar</a></td>
                    
                </tr>
         <?php
            }
         ?>

         
         </table>
         <!-- inicio insert -->
         <hr>
         <h3> Ingresar inmueble:</h3>
         <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Nombre del inmueble: </td>
                    <td><input type="text" name="txtInmueble"></td>
                </tr>
                     
                <tr>
                    <td>Dirección: </td>
                    <td><input type="text" name="txtDirección"></td>
                </tr>
                <input type="hidden" name="oculto"value="1">
                <tr>
                    <td><input type="reset" name=""></td>
                    <td><input type="submit" value="Ingresar inmueble"></td>
                </tr>
            </table>

         </form>

         <!-- fin insert -->
    </center>       
    
</body>
</html>