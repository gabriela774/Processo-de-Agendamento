<?php

class agendamento {

    private string $id;
    private string $nome;
    private string $cpf;
    private string $email;
    private string $pet;
    private string $tipo;
    private DateTime $dataHora;
    private string $status;

    public function __construct(
        string $nome,
        string $cpf,
        string $email,
        string $pet,
        string $tipo,
        DateTime $dataHora
    ) {

        if (empty($nome) || empty($cpf)) {
            throw new Exception("Nome e CPF são obrigatórios.");
        }

        $this->id = uniqid('agend_', true);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->pet = $pet;
        $this->tipo = $tipo;
        $this->dataHora = $dataHora;
        $this->status = "Ativo";
    }

    public function salvar($conn): bool {

        $data = $this->dataHora->format('Y-m-d');
        $hora = $this->dataHora->format('H:i:s');

        $sql = "INSERT INTO agendamento
        (nome, cpf, email, pet, tipo, data, hora)
        VALUES 
        ('$this->nome', '$this->cpf', '$this->email', '$this->pet', '$this->tipo', '$data', '$hora')";

        return mysqli_query($conn, $sql);
    }
}