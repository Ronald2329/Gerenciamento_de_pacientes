<?php
require 'conexão.php';
include 'protect.php';

try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("UPDATE `pacientes` SET `sexo`='".$_POST["sexo"]."',
         `idade`='".$_POST["idade"]."', `telefone`= '".$_POST["telefone"]."' ,
          `informacoes`= '".$_POST["informacoes"]."' WHERE id = ?");
        $stmt->bind_param("s", $id);

        if (!$stmt->execute()) {
            throw new Exception("Erro ao atualizar paciente: " . $stmt->error);
            echo ('<a href="Reescrever.php"> Para voltar para a página de atualização de pacientes clique aqui');

        }

        if ($stmt->affected_rows == 0) {
            throw new Exception("Nome incorreto ou inexistente!");
            echo ('<a href="Reescrever.php"> Para voltar para a página de atualização de pacientes clique aqui');

            
        }

        header("Location: pacientes.php?id=".$id);
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $conn->close();
}
