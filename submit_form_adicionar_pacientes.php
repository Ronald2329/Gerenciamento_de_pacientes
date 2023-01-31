<?php
include 'protect.php';
require 'conexão.php';

if($conn === FALSE){
    echo 'Não é possível realizar essa acão!';
}else{
    
   $sql = "INSERT INTO pacientes(nome, sexo, idade, telefone, informacoes) VALUES ('".$_POST["nome"]."',"
     . "'".$_POST["sexo"]."','".$_POST["idade"]."',". "'".$_POST["telefone"]."','".$_POST["informacoes"]."')";

        if ($conn->query($sql) === TRUE) {
         echo "Novo paciente adicionado com sucesso!! <br>";  
         header("Location: exibição.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}


$conn->close();