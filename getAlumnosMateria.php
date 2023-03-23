<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $id_materia  = $_GET['id_materia'];

    $query = "SELECT am.id, a.nombres, a.email, a.telefono FROM alumno_materia am INNER JOIN alumnos a on a.id = am.id_alumno WHERE am.Id_materia = {$id_materia}";
    $result = $mysql->query($query);
    if($mysql->affected_rows > 0){
        $array="{\"data\":[";
        while($row =$result->fetch_assoc()){
            $array = $array.json_encode($row);
            $array = $array.",";
        }
        $array=substr(trim($array),0,-1);
        $array=$array."]}";
        echo $array;
    }else{
        echo "No hay registros";
    }
    $mysql->close();
}