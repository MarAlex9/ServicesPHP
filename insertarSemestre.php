<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $descripcion = $_POST["descripcion"];
    $id_docente = $_POST["id_docente"];

    if ($id == "null") {

        $queryValidate = "SELECT * FROM semestre WHERE codigo = '{$codigo}' AND id_docentes = '{$id_docente}'";
        $resultValidate = $mysql->query($queryValidate);

        if ($mysql->affected_rows > 0) {
            echo "1";
        } else {

            $query = "INSERT INTO semestre (nombre,codigo,descripcion,id_docentes) VALUES('{$nombre}','{$codigo}','{$descripcion}',{$id_docente})";
            $result = $mysql->query($query);
            if ($result == true) {
                echo "insertado exitosamente";
            } else {
                echo "1";
            }
        }
    }else{
       
        $query = "UPDATE semestre SET nombre = '{$nombre}', codigo = '{$codigo}', descripcion = '{$descripcion}' WHERE id = {$id} ";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "actualizado exitosamente";
        } else {
             echo "1";
        }
        
    }
}