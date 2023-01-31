<?php

include 'protect.php';
require 'conexão.php';

$id = $_GET["id"];

    $sql = "SELECT * FROM pacientes WHERE id = $id";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Sexo</th>";
            echo "<th>Idade</th>";
            echo '<th>Telefone</th>;';
            echo '<th>Informações sobre o paciente</th>;';

            echo "</tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                $nome =  $row["nome"];
                echo "<td>" . $row["nome"]. "</td> ";
                echo "<td>" . $row["sexo"]. "</td>";
                echo "<td>" . $row["idade"]. "</td>";
                echo "<td>" . $row["telefone"]. "</td>";
                echo "<td>" . $row["informacoes"]. "</td>";

                echo "</tr>";
    }
    echo "</table><br><br>";
} else {
    echo "Não há resultados para exibir.";
}

$sql2 = "SELECT * FROM visitas WHERE paciente_id = $id";
    $resultado = $conn->query($sql2);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Lugar</th>";
            echo "<th>Data</th>";
            echo '<th>Informações sobre a visita</th>;';

            echo "</tr>";
            // output data of each row
            while($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["lugar"]. "</td> ";
                echo "<td>" . $row["horario"]. "</td>";
                echo "<td>" . $row["informacoes"]. "</td>";

                echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há resultados para exibir.";
}


$conn->close();

$file = 'Planilha do paciente ' . $nome . '.xls';
        header ("Content-type: application/x-msexcel");
        header ("Content-Disposition: attachment; filename=\"{$file}\"" );
        header ("Content-Description: PHP Generated Data" );
?>