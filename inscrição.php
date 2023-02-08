<?php
      include 'protect.php';
    ?>

<!DOCTYPE html>
<html>
<head>
    <title> inscrição de novo paciente</title
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
    <nav>
        <ul>
    <li><a href="painel.php">Home</a></li>
    <li><a href="inscrição.php">Cadastrar novos pacientes</a></li>
    <li><a href="Remover.php">Remover pacientes</a></li>
    <li><a href="exibição.php">Exibição dos pacientes</a></li>
    <li><a href="Reescrever.php">Atualizar pacientes já cadastrados</a></li>
    <li><a href="Exibir_visitas.php">Exibição todas as visitas</a></li>
    <li><a href="Logout.php">Sair</a></li>

  </ul>
</nav><br>
    
    <form class = "inscrição" action="submit_form_adicionar_pacientes.php" method="post">
        ><label>Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        <label>Sexo:</label><br>
        <input type="text" id="sexo" name="sexo"><br><br>
        <label>Idade:</label><br>
        <input type="number" id="idade" name="idade"><br><br>
        <label>Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>
        
        <label>Informações pessoais</label><br>
        <textarea id="informacoes" name="informacoes"></textarea><br>
        <input type="submit" style="background-color: greenyellow" value="Adicionar!">
            </form>
</body>
</html>
