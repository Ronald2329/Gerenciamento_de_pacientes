<?php
require 'conexão.php';
include 'protect.php';

try {
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];

        if (strlen($nome) == 0) {
            throw new Exception("O campo de nome no qual você deseja atualizar não deve ficar vazio!!");
            echo ('<a href="Reescrever.php"> Para voltar para a página de atualização de pacientes clique aqui</a>');

        }

        $stmt = $conn->prepare("UPDATE `pacientes` SET `sexo`='".$_POST["sexo"]."', `idade`='".$_POST["idade"]."', `telefone`= '".$_POST["telefone"]."' , `informacoes`= '".$_POST["informacoes"]."' WHERE nome = ?");
        $stmt->bind_param("s", $nome);

        if (!$stmt->execute()) {
            throw new Exception("Erro ao atualizar paciente: " . $stmt->error);
            echo ('<a href="Reescrever.php"> Para voltar para a página de atualização de pacientes clique aqui</a>');

        }

        if ($stmt->affected_rows == 0) {
            throw new Exception("Nome incorreto ou inexistente!");
            echo ('<a href="Reescrever.php"> Para voltar para a página de atualização de pacientes clique aqui</a>');

            
        }

        header("Location: exibição.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $conn->close();
}
