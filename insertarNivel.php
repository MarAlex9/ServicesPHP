<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $descripcion = $_POST["descripcion"];
    $id_semestre = $_POST["id_semestre"];

    if ($id == "null") {

        $queryValidate = "SELECT * FROM nivel WHERE codigo = '{$codigo}' AND id_semestre = '{$id_semestre}'";
        $resultValidate = $mysql->query($queryValidate);

        if ($mysql->affected_rows > 0) {
            echo "1";
        } else {

            $query = "INSERT INTO nivel (nombre,codigo,descripcion,id_semestre) VALUES('{$nombre}','{$codigo}','{$descripcion}',{$id_semestre})";
            $result = $mysql->query($query);
            if ($result == true) {
                echo "insertado exitosamente";
            } else {
                echo "1";
            }
        }
    }else{
       
        $query = "UPDATE nivel SET nombre = '{$nombre}', codigo = '{$codigo}', descripcion = '{$descripcion}', id_semestre={$id_semestre} WHERE id = {$id} ";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "actualizado exitosamente";
        } else {
             echo "1";
        }
        
    }
}