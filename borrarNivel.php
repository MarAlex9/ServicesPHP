<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $id = $_POST["id"];
  
    $query = "DELETE FROM nivel WHERE id = {$id}";
    $result = $mysql->query($query);
    if ($result == true) {
        echo "Eliminado exitosamente";
    } else {
        echo "1";
    }
        
    
}