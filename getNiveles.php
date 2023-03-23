<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $id_semestre  = $_GET['id_semestre'];

    $query = "SELECT * FROM nivel WHERE id_semestre = '{$id_semestre}'";
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