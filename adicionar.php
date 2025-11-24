<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Adicionar Produto</h2>

    <form action="salvar.php" method="POST">
        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade" required><br><br>

        <label>Preço (R$):</label><br>
        <input type="number" step="0.01" name="preco" required><br><br>

        <button class="button" type="submit">Salvar</button>
        <a class="button" href="index.php">Voltar</a>
    </form>
</div>
