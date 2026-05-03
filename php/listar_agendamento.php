<?php

include("conexao.php");

$sql = "SELECT * FROM agendamentos";
$result = mysqli_query($conn, $sql);

echo "<h2>agendamento</h2>";

    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>Email</th>
    <th>Pet</th>
    <th>Tipo</th>
    <th>Data</th>
<th>Hora</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['nome']}</td>
        <td>{$row['cpf']}</td>
        <td>{$row['email']}</td>
        <td>{$row['pet']}</td>
        <td>{$row['tipo']}</td>
        <td>{$row['data']}</td>
        <td>{$row['hora']}</td>
    </tr>";
}

echo "</table>";