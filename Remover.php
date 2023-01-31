<?php

  include 'protect.php';
  ?>
<!DOCTYPE html>
<html>
<head>
    <title> Remover paciente</title
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style> body {height: 50px; padding: 100px;text-align: center;}</style>
    
</head>
<body>
    <nav>
        <ul class="menu-icon" onclick="toggleMenu()">
    <li><a href="painel.php">Home</a></li>
    <li><a href="inscrição.php">Cadastrar novos pacientes</a></li>
    <li><a href="Remover.php">Remover pacientes</a></li>
    <li><a href="exibição.php">Exibição dos pacientes</a></li>
    <li><a href="Reescrever.php">Atualizar pacientes já cadastrados</a></li>
    <li><a href="Logout.php">Sair</a></li>

  </ul>

</nav>
    
        <form action="submit_form_remover_pacientes.php" method="post">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        <input type="submit" style= "background-color: red" value="Remover!">
        </form>
</body>
</html>
