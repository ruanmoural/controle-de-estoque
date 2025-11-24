<?php
if (!isset($_GET["id"])) die("ID não informado.");

$id = $_GET["id"];
$produtos = json_decode(file_get_contents("banco.json"), true);

if (!isset($produtos[$id])) die("Produto não encontrado.");

$produto = $produtos[$id];
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Editar Produto</h2>

    <form action="salvar_edicao.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">

        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required><br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required><br><br>

        <label>Preço (R$):</label><br>
        <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required><br><br>

        <button class="button" type="submit">Salvar Alterações</button>
        <a class="button" href="index.php">Cancelar</a>
    </form>
</div>
