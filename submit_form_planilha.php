<?php

include 'protect.php';
require 'conexão.php';

    $sql = "SELECT * FROM pacientes";
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
                echo "<td>" . $row["nome"]. "</td> ";
                echo "<td>" . $row["sexo"]. "</td>";
                echo "<td>" . $row["idade"]. "</td>";
                echo "<td>" . $row["telefone"]. "</td>";
                echo "<td>" . $row["informacoes"]. "</td>";

                echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não há resultados para exibir.";
}
$conn->close();

$file = 'Planilha de pacientes.xls';
        header ("Content-type: application/x-msexcel");
        header ("Content-Disposition: attachment; filename=\"{$file}\"" );
        header ("Content-Description: PHP Generated Data" );
?>