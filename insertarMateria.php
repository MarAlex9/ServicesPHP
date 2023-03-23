<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $descripcion = $_POST["descripcion"];
    $id_nivel = $_POST["id_nivel"];

    if ($id == "null") {

        $queryValidate = "SELECT * FROM materia WHERE codigo = '{$codigo}' AND id_nivel = '{$id_nivel}'";
        $resultValidate = $mysql->query($queryValidate);

        if ($mysql->affected_rows > 0) {
            echo "1";
        } else {

            $query = "INSERT INTO materia (nombre,codigo,descripcion,id_nivel) VALUES('{$nombre}','{$codigo}','{$descripcion}',{$id_nivel})";
            $result = $mysql->query($query);
            if ($result == true) {
                echo "insertado exitosamente";
            } else {
                echo "1";
            }
        }
    }else{
       
        $query = "UPDATE materia SET nombre = '{$nombre}', codigo = '{$codigo}', descripcion = '{$descripcion}', id_nivel = {$id_nivel} WHERE id = {$id} ";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "actualizado exitosamente";
        } else {
             echo "1";
        }
        
    }
}