<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $usuario = $_GET['usuario'];
    $clave = $_GET['clave'];

    $query = "SELECT * FROM docentes WHERE usuario = '{$usuario}' AND clave = '{$clave}'";
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