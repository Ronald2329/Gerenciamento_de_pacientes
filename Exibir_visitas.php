<?php

    include 'protect.php';
    require 'conexão.php';
    ?>
<html lang="pt-br">
	<head>
		<title>Exibição de pacientes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	 <link rel="stylesheet" type="text/css" href="estilo.css">

	
		<style>p
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
            
            
  <nav>
        <ul class="menu-icon" onclick="toggleMenu()">
    <li><a href="painel.php">Home</a></li>
    <li><a href="inscrição.php">Cadastrar novos pacientes</a></li>
    <li><a href="Remover.php">Remover pacientes</a></li>
    <li><a href="exibição.php">Exibição dos pacientes</a></li>
    <li><a href="Exibir_visitas.php">Exibição todas as visitas</a></li>
    <li><a href="Reescrever.php">Atualizar pacientes já cadastrados</a></li>
    <li><a href="Logout.php">Sair</a></li>

  </ul>
  <a href="painel.php" class="menu-icon" onclick="toggleMenu()">&#9776;</a>
</nav>

      <?php

    $sql = "SELECT * FROM visitas";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Lugar de atentimento</th>";
            echo "<th>Data</th>";
            echo "<th>Informações sobre visita</th>";
            echo "<th>Link para aba do paciente</th>";

            echo "</tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["lugar"]. "</td> ";
                echo "<td>" . $row["horario"]. "</td>";
                echo "<td>" . $row["informacoes"]. "</td>";
                echo "<td><a href='pacientes.php?id=" .$row["paciente_id"]. "'>Link para paciente</a></td> ";

                echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há resultados para exibir.";
}
$conn->close();

?>
        <form action="submit_form_visitas.php" method="post">
        <br><label> Clique no botão abaixo para fazer dowload da tabela de visitas</label><br>
        <br><input type="submit" value="Clique aqui!!">
        </body>
        
 </html>
