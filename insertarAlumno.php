<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombres"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $id_docente = $_POST["id_docentes"];

    if ($id == "null") {
        $query = "INSERT INTO alumnos (nombres,email,telefono,id_docentes) VALUES('{$nombre}','{$email}','{$telefono}',{$id_docente})";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "insertado exitosamente";
        } else {
            echo "1";
        }
        
    }else{
       
        $query = "UPDATE alumnos SET nombres = '{$nombre}', email = '{$email}', telefono = '{$telefono}' WHERE id = {$id} ";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "actualizado exitosamente";
        } else {
             echo "1";
        }
        
    }
}