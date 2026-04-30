<?php
//recebe dados,valida ,verifica se já existe horário, se existir  bloqueia, se não existir vai salva
include("conexao.php");
include("agendamento.php");

try {
 // recebe data e hora inseridas pelo usuario
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    // verifica internamente se já tem 
    $sqlVerifica = "SELECT id FROM agendamento
                    WHERE data = '$data'
                    AND hora = '$hora'
                    AND status = 'Ativo'";

    $resultado = mysqli_query($conn, $sqlVerifica);

    if (mysqli_num_rows($resultado) > 0) {
        throw new Exception("Horário Indisponível.");
    }
    $dataHora = new DateTime($_POST['data'] . " " . $_POST['hora']);

    $agendamento = new agendamento(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email'],
        $_POST['pet'],
        $_POST['tipo'],
        $dataHora
    );

    if ($agendamento->salvar($conn)) {
        echo "agendamento realizado com sucesso!";
    } else {
        echo "Erro ao salvar!";
    }

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
