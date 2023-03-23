<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'conexion.php';
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $queryValidate = "SELECT * FROM docentes WHERE usuario = '{$usuario}'";
    $resultValidate = $mysql->query($queryValidate);

    if($mysql->affected_rows > 0){
        echo "1";
    }else{
        
        $query = "INSERT INTO docentes (nombre,email,usuario,clave) VALUES('{$nombre}','{$email}','{$usuario}','{$clave}')";
        $result = $mysql->query($query);
        if($result == true){
            $queryId = "SELECT id FROM docentes WHERE usuario = '{$usuario}'";
            $resultId = $mysql->query($queryId);
            while($row =$resultId->fetch_array()){
                $array = $row;
            }
            echo $array["id"];
        }else{
            echo "error al insertar el usuario";
        }
    }
}