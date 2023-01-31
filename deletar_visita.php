<?php

include 'protect.php';
require 'conexão.php';

$visita_id = $_GET["vs"];
$id = $_GET["id"];

$del = "DELETE FROM visitas WHERE id = '$visita_id'";

if($conn->query($del) === TRUE){
    header("Location: pacientes.php?id=".$id);
}else{
    echo 'erro:' . $query . "<br>";
}

