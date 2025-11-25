🗃️ Sistema de Controle de Estoque

Este projeto é um Sistema de Controle de Estoque desenvolvido para gerenciar produtos de forma simples e eficiente. Ele permite cadastrar, editar e listar produtos, além de controlar quantidade, preço e outras informações essenciais.

📌 Funcionalidades

Cadastrar produtos com nome, quantidade e preço

Editar informações de produtos existentes

Excluir produtos do estoque

Listar produtos cadastrados

Armazenamento em arquivo JSON (ou banco de dados, dependendo da versão)

Interface simples, clara e objetiva

🛠️ Tecnologias utilizadas

Dependendo da sua implementação, por exemplo:

PHP (para backend)

JSON como banco de dados simples

HTML / CSS / JavaScript para interface

Bootstrap (opcional)

XAMPP / WampServer (ambiente local)

📂 Estrutura de Arquivos (exemplo)
/projeto-estoque
│── index.php
│── adicionar.php
│── editar.php
│── banco.json
│── styles.css
└── README.md

🚀 Como executar

Coloque o projeto na pasta htdocs (se usar XAMPP)

Inicie o Apache

Acesse no navegador:

http://localhost/projeto-estoque

📖 Exemplo de cadastro (PHP)
$id = $_POST["id"];
$nome = $_POST["nome"];
$quantidade = intval($_POST["quantidade"]);
$preco = floatval($_POST["preco"]);

$produtos = json_decode(file_get_contents("banco.json"), true);

$produtos[$id] = [
    "nome" => $nome,
    "quantidade" => $quantidade,
    "preco" => $preco
];

file_put_contents("banco.json", json_encode($produtos, JSON_PRETTY_PRINT));

🧪 Possíveis melhorias

Implementar login de usuário (admin)

Criar gráficos de movimentação de estoque

Buscar produtos por nome

Criar histórico de entradas e saídas

Migrar para banco de dados MySQL

📄 Licença

Este projeto é de uso livre para estudo e aperfeiçoamento.
