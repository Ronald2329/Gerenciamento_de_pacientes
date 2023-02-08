<?php

include 'protect.php';
require 'conexão.php';

$id = $_GET["id"];
$lugar = $_POST["visit-option"];
$informacoes = $_POST["informacoes"];

$query = "INSERT INTO visitas(lugar,paciente_id,informacoes) VALUES ('$lugar','$id','$informacoes')";
$result = $conn->query($query);

if($result === TRUE){
    header("Location: exibição.php");
}else{
    echo 'erro:' . $query . "<br>";
}