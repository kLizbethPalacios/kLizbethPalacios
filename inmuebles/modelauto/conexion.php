<?php
    $contrasena = '';
    $usuario ='root';
    $nombrebd= 'automatichome1';

    try {
        $bd = new PDO(
            'mysql:host=localhost;
            dbname='.$nombrebd,
            $usuario,
            $contrasena

        );
    } catch (Exception $e){
        echo "Error de conexción".$e->getMessage();

    }


?>