<?php
include 'protect.php';
require 'conexão.php';

$id = $_GET["id"];
$sel = "SELECT * FROM pacientes WHERE id = $id";
$result = $conn->query($sel);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $nome = $row["nome"];
    $sexo = $row["sexo"];
    $idade = $row["idade"];
    $informacoes = $row["informacoes"];
    $telefone = $row["telefone"];
}
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <?php echo'<title> Reescrever '. $nome. 'paciente</title';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style> body {height: 50px; padding: 100px;text-align: center;}</style>
    
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

</nav>
        <?php echo' Preeencha todos os campos pois caso contrário, o seu formulário irá ficar com  "0" nos campos onde não foi preenchidos!!<br>';?>
        <?php  echo '<form action="Reescrever_cada_paciente.php?id='.$id.'" method="post">';?><br><br>
        <?php echo'<label>'. $nome.':</label><br>';?>
        <label>Sexo:</label>
        <input type="text" id="sexo" name="sexo"><br><br>
        <?php  echo'Sexo anterior de '. $nome.': '. $sexo.'<br>';?><br>

        <label>Idade:</label>
        <input type="number" id="idade" name="idade"><br><br>
        <?php echo'Idade anterior de ' . $nome.' : '. $idade.'<br>';?><br>

        <label>Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>
        <?php echo'Telefone anterior de '. $nome.' : '. $telefone.'<br>';?><br>

        <label>Informações pessoais do paciente:</label><br>
        <textarea id="informacoes" name="informacoes"></textarea><br><br>
        <?php echo'Informações pessoais de '. $nome. ' anterior: '. $informacoes.'<br>';?><br>
        <input type="submit" style="background-color: greenyellow" value="Atualizar!">
        </form>
</body>
</html>
