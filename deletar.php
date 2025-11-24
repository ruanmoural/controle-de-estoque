<?php
$id = $_GET["id"];

$produtos = json_decode(file_get_contents("banco.json"), true);

if (isset($produtos[$id])) {
    array_splice($produtos, $id, 1);
    file_put_contents("banco.json", json_encode($produtos, JSON_PRETTY_PRINT));
}

header("Location: index.php");
exit;
