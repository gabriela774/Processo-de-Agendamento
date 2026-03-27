## Diagrama UML - Sistema de Agendamento

O desenvolvimento do sistema será realizado em etapas:

1. Configuração do ambiente utilizando XAMPP (Apache e MySQL).
2. Criação da estrutura do projeto no VS Code.
3. Desenvolvimento do front-end com HTML e CSS.
4. Criação do formulário de agendamento.
5. Implementação de validações com JavaScript.
6. Desenvolvimento do back-end com PHP.
7. Criação do banco de dados no MySQL.
8. Integração entre sistema e banco de dados.
9. Testes e validação do sistema.



##  Diagrama UML (Fluxo do Sistema)

```mermaid
flowchart TD

A[Usuário] --> B[index.html]
B --> C[Formulário]

C --> D[js/script.js]
D --> E[php/salvar_agendamento.php]

E --> F[php/conexao.php]
F --> G[(Banco de Dados)]

G --> H[Agendamento salvo]
H --> A
```


## Diagrama de Classes

```mermaid
classDiagram

class Cliente {
  id
  nome
  cpf
  email
}

class Animal {
  id
  nome
  especie
  idade
}

class Medico {
  id
  nome
  especialidade
}

class Agendamento {
  id
  data
  hora
  tipo_exame
}

Cliente "1" --> "N" Animal
Cliente "1" --> "N" Agendamento
Animal "1" --> "N" Agendamento
Medico "1" --> "N" Agendamento
```
