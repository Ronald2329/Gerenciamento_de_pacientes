<?php

require 'conexão.php';

session_start();

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // validar dados
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Preencha um e-mail válido! <br>";
        header("Location: index.php");
    }else if(strlen($senha) < 8){
        echo "A senha deve ter no mínimo 8 caracteres! <br>";
        header("Location: index.php");
    }else if(strlen($nome) == 0){
        echo "Preencha o seu nome!";
        echo ('Para voltar a tela de login clique aqui!! <a  href = "index.php" <br>'); 
    }else{
        // preparar statement
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usu_nome = ? AND usu_senha = ? AND usu_email = ?");
        $stmt->bind_param("sss", $nome, $senha, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1) {
            // logar usuário
            $usuario = $result->fetch_assoc();
            $_SESSION['usuario'] = $usuario;
            header("Location: painel.php");      
        }else{
            header("Location: index.php");
        }
    }
}else{
    die("Por favor preencha todos os campos!");
}

$conn->close();
