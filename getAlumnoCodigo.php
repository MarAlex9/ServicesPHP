<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $id  = $_GET['id'];

    $query = "SELECT * FROM alumnos WHERE id = {$id}";
    $result = $mysql->query($query);
    if($mysql->affected_rows > 0){
        while($row =$result->fetch_assoc()){
            $array = $row;
        }
        echo json_encode($array);
    }else{
        echo "No hay registros";
    }
    $mysql->close();
}