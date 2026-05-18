<?php
// recebe dados, valida, verifica se já existe horário,
// se existir bloqueia, se não existir vai salvar

include("conexao.php");
include("agendamento.php");

try {

    // recebe data e hora inseridas pelo usuário
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    // verifica internamente se já tem
    $sqlVerifica = "SELECT id FROM agendamentos
                    WHERE data = '$data'
                    AND hora = '$hora'
                    AND status = 'Ativo'";

    $resultado = mysqli_query($conn, $sqlVerifica);

    // se existir bloqueia e redireciona para tela de erro
    if (mysqli_num_rows($resultado) > 0) {
        header("Location: ../html/erro.html");
        exit;
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

    // se não existir salva e redireciona para tela de sucesso
    if ($agendamento->salvar($conn)) {
        header("Location: ../html/sucesso.html");
        exit;
    } else {
        header("Location: ../html/erro.html");
        exit;
    }

} catch (Exception $e) {

    // qualquer erro inesperado redireciona para tela de erro
    header("Location: ../html/erro.html");
    exit;
}
?>