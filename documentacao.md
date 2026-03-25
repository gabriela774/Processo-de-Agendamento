##  Sistema de Agendamento

##  Objetivo do sistema

##Desenvolver um sistema simples de agendamento para clínica
veterinária, permitindo que o usuário marque consultas ou exames
para seu pet por meio de um site, com armazenamento das
informações em banco de dados e integração entre interface, servidor
e banco de dados.

Primeiramente será realizada a configuração do ambiente de desenvolvimento
utilizando o XAMPP, ativando os serviços Apache e MySQL para permitir a
execução do sistema em servidor local. Em seguida, o projeto será criado no
Vscode onde será desenvolvido o corpo do site utilizando HTML para estruturar
a página. Após a criação da estrutura, será aplicada a estilização com CSS para
organizar o layout e melhorar a aparência visual do sistema.

Posteriormente, será acessado o phpMyAdmin para criação do banco de dados
e das tabelas necessárias ao sistema, sendo elas: clientes, animais, médicos e
agendamentos. Após a estruturação do banco de dados, será desenvolvida a
parte backend em PHP. Nessa etapa será feita a conexão com o MySQL e
implementada toda a lógica de processamento dos dados, permitindo que as
informações enviadas pelo formulário sejam armazenadas corretamente no
banco. O sistema de agendamento funcionará da seguinte forma: o usuário
acessará o site, selecionará o tipo de exame que seu pet necessita, verificará a
disponibilidade de data e horário, e preencherá seus dados pessoais como
nome, CPF e e-mail. Após o envio do formulário, as informações serão
registradas no banco de dados, concluindo o agendamento.

## Linguagens utilizadas
 HTML – Será utilizado para criar a estrutura do site. Construção
dos formulários de agendamento. Criação dos campos para
preenchimento de dados (nome, CPF, e-mail, tipo de exame, data e
horário).

## CSS - Será utilizado para estilizar o site.Organização do layout da
página. Definição de cores, fontes, espaçamentos e posicionamento
dos elementos.

## PHP - Será responsável pelo desenvolvimento do backend. Realizar
a conexão com o banco de dados MySQL. Processar os dados
enviados pelo formulário. Inserir as informações nas tabelas do banco
de dados. Controlar a lógica do agendamento.

## MySQL - Será utilizado para armazenar os dados do sistema. Criação
das tabelas: clientes, animais, médicos e agendamentos.
Armazenamento das informações dos usuários e das consultas
agendadas.

## XAMPP - Será utilizado como servidor local. Executará o Apache e o
MySQL. Permitirá testar o sistema no navegador.
Visual Studio Code - Será utilizado como editor de código para
desenvolver todos os arquivos do projeto
