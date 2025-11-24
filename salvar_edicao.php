<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$quantidade = intval($_POST["quantidade"]);
$preco = floatval($_POST["preco"]);

$produtos = json_decode(file_get_contents("banco.json"), true);

$produtos[$id]["nome"] = $nome;
$produtos[$id]["quantidade"] = $quantidade;
$produtos[$id]["preco"] = $preco;

file_put_contents("banco.json", json_encode($produtos, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
