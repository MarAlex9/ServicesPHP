<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id_alumno = $_POST["id_alumno"];
    $id_materia = $_POST["id_materia"];


    $query = "INSERT INTO alumno_materia (id_alumno, Id_materia) VALUES('{$id_alumno}','{$id_materia}')";
    $result = $mysql->query($query);
    if ($result == true) {
        echo "insertado exitosamente";
    } else {
        echo "1";
    }
        
    
}