<?php
$mysql = new mysqli("sql10.freesqldatabase.com","sql10608126","6q1MifFT6X","sql10608126",3306);
if($mysql->connect_error){
    die("Eror de conexión");
}