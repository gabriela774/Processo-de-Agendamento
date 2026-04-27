<?php
//recebe dados,valida ,verifica se já existe horário, se existir  bloqueia, se não existir → salva
include("conexao.php");
include("Agendamento.php");

try {

    $dataHora = new DateTime($_POST['data'] . " " . $_POST['hora']);

    $agendamento = new Agendamento(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email'],
        $_POST['pet'],
        $_POST['tipo'],
        $dataHora
    );

    if ($agendamento->salvar($conn)) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro ao salvar!";
    }

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
