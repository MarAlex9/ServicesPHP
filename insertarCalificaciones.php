<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
    $aporte = $_POST["aporte"];
    $nota = $_POST["nota"];
    $id_alumno_materia  = $_POST["id_alumno_materia"];

    if ($id == "null") {
        $query = "INSERT INTO calificaciones (aporte,nota,id_alumno_materia) VALUES('{$aporte}', {$nota},{$id_alumno_materia})";
       echo $query;
        $result = $mysql->query($query);
        if ($result == true) {
            echo "insertado exitosamente";
        } else {
            echo "1";
        }
        
    }else{
       
        $query = "UPDATE calificaciones SET aporte = '{$aporte}', nota = '{$nota}', id_alumno_materia = '{$id_alumno_materia}' WHERE id = {$id} ";
        $result = $mysql->query($query);
        if ($result == true) {
            echo "actualizado exitosamente";
        } else {
             echo "1";
        }
        
    }
}