<?php

include 'protect.php';

// Pega o ID do paciente da URL
$id = $_GET['id'];

// Conecta ao banco de dados
require 'conexão.php';

// Faz a consulta no banco de dados para pegar as informações do paciente
$sql = "SELECT * FROM pacientes WHERE id = $id";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // Pega as informações do paciente
    $row = $result->fetch_assoc();
    $nome = $row["nome"];
    $sexo = $row["sexo"];
    $idade =  $row["idade"];
    $telefone =  $row["telefone"];
    $informacoes =  $row["informacoes"];
} else {
    echo "Nenhum paciente encontrado com o ID especificado.";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Informações do Paciente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="estilo.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        /* Adicione aqui a formatação CSS da sua preferência */

			* {box-sizing: border-box;}

			body {font-family: Arial, Helvetica, sans-serif;}
			
			.header,.main,.footer{max-width:1200px;margin:auto}
			
			.header {background-color: #f1f1f1;padding: 30px;text-align: center;font-size: 35px;}
			
			.footer {background-color: #f1f1f1;padding: 10px;text-align: center;}
			
			table{width:100% }
			
			table, th, td, caption{
				border:1px solid #c0c0c0;
				border-collapse:collapse;padding:5px
			}
			
			table caption{
				background-color:#d9d9d9;
				font-weight:bold
			}
			
			tbody tr:nth-child(odd) {
				background-color: #f2f2f2;
			}
			
			td:nth-child(3),tfoot td:nth-child(2) {
				text-align:right;
				font-weight:bold
			}
			
			td:nth-child(3){
				width:30%
			}

			@media (max-width: 600px) { table caption{display:none; }}
                    

	</style>

</head>
<body>

<ul>
    <li><a href="exibição.php"> Voltar para Exibição dos pacientes</a></li>
    <li><a href="Logout.php">Sair</a></li>
  </ul>
</nav><br><br><br>

    <h1>Informações do Paciente <?php echo $nome?></h1>
    <table>
        <tr>
            <td>Nome:</td>
            <td><?php echo $nome; ?></td>
        </tr>
        <tr>
            <td>Sexo:</td>
            <td><?php echo $sexo; ?></td>
        </tr>
        <tr>
            <td>Idade:</td>
            <td><?php echo $idade; ?></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><?php echo $telefone; ?></td>
        </tr>
        <tr>
            <td>Informações Adicionais:</td>
            <td><?php echo $informacoes; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <?php
  echo "<h1>Visitas do paciente " .$nome. "</h1>";

    // Faz a consulta no banco de dados para pegar as informações do paciente referente as visitas 
$sql2 = "SELECT * FROM visitas WHERE paciente_id = $id";
$resultado= $conn->query($sql2);

// Verifica se há resultados
if ($resultado->num_rows > 0) {
    // Pega as informações do paciente
    echo "<table>";
    echo "<tr>";
    echo "<th>Lugar</th>";
    echo "<th>Data</th>";
    echo "<th>Informações sobre a visita</th>";
    echo "<th>Deletar visita</th>";
    echo "</tr>";
            while($row = $resultado->fetch_assoc()){
                $horario = $row["horario"];
                $lugar = $row["lugar"];
                $informacoes = $row["informacoes"];
                 $visita_id = $row["id"];
                     echo "<tr>";
                     echo "<td>" . $lugar . "</td>";
                     echo "<td>" . $horario . "</td>";
                     echo "<td>" . $informacoes . "</td>";
                     echo "<td><a href = 'deletar_visita.php?vs=" . $visita_id ."&id=". $id."'>Deletar visita de ". $nome." </td>";
                     echo "</tr>";
            }
            echo "</table><br><br>";    
} else {
    echo "Nenhum resultado para exibir.<br><br>";
}

// Fecha a conexão com o banco de dados
$conn->close();

    echo '<form action="submit_form_pdf.php?id=' . $id . '" method="post">'; 
    echo '<input type="submit" value="Baixar planilha de '.$nome.'">';
    echo '</form><br><br>';

    echo 'Deseja deletar o paciente '.$nome.' ? <br>';
    echo '<form action="remover_cada_paciente.php?id='.$id.'" method="post">';
    echo '<input type="submit" value="Sim" name="confirmar">';
    echo '<a href="exibição.php"><input type="button" value="Não"></a>';
    echo '</form>';

 echo '<br><br>Deseja alterar alguma informação sobre o paciente '. $nome.'?<br>';
 echo '<form action="modificar_cada_paciente.php?id='.$id.'" method="post">';
 echo '<input type = "submit" value = "Sim" name = "confirmar"> ';
 echo '<a  href= "exibição.php"><input type = "button" value ="Não">';
 echo '</form>';

 echo '<br><br>Deseja adicionar uma visita ao paciente '. $nome.'?<br>';
 echo '<form action="visitas.php?id='.$id.'" method="post">';
 echo '<input type = "submit" value = "Sim" name = "confirmar"> ';
 echo '<a  href= "exibição.php"><input type = "button" value ="Não">';
 echo '</form>';

 ?>


</body>
</html>
