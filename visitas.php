<?php
      include 'protect.php';

      $id = $_GET["id"];
    ?>

<!DOCTYPE html>
<html>
<head>
    <title> inscrição de novo paciente</title
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
    <li><a href="Exibir_visitas.php">Exibição todas as visitas</a></li>
    <li><a href="Logout.php">Sair</a></li>

  </ul>
</nav>
    <h2> Adicione aonde o paciente está sendo atendido:</h2>
    <?php echo '<form action="adicionar_visitas.php?id='.$id.'" method="post">';?>
    <form>
        <label for="visit-option">
        Selecione uma opção de visita:
    </label>
    <br>
    <p> (Clique em cima das opções e utilize as setas do seu teclado para escolher <-î->)</p>
        <select id="visit-option" name="visit-option">
            <option value="Clinica Scillo">Clínica Scillo</option>
            <option value="CPM">CPM</option>
            <option value="Quartel">Quartel</option>
        </select><br>
        <Label>Informações adicionais sobre a visita:</Label>
        <input type = "text" name = "informacoes">

        <br>
        <input type="submit" value="Enviar!">
        </form>

</html>
