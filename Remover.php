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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <li><a href="Logout.php">Sair</a></li>

  </ul>

</nav><br><br><br>
    
        <form class = "removendo" action="submit_form_remover_pacientes.php" method="post">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        <input type="submit" style= "background-color: red" value="Remover!">
        </form>
</body>
</html>
