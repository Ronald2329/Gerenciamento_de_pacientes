<?php

include 'protect.php';
// Conecta ao banco de dados
require 'conexão.php';

$id = $_GET['id'];

if (!isset($_GET['id'])) {
    echo "Nenhum ID especificado.";
    exit;
}

if (!is_numeric($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

        if(isset($_POST['confirmar'])){
            //código de deleção
        $sql1 = "DELETE FROM pacientes WHERE id = $id";
        $resultado = $conn->query($sql1);
            echo 'Paciente deletado com sucesso!';
            header("Location: exibição.php");
          }else {
        echo "Nenhum paciente encontrado com o ID especificado.";
        exit;
}
// Fecha a conexão com o banco de dados
$conn->close();

