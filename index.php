<?php
$produtos = json_decode(file_get_contents("banco.json"), true);
$totalGeral = 0;
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Controle de Estoque</h2>

    <a class="button" href="adicionar.php">Adicionar Produto</a>
    <br><br>

    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço (R$)</th>
            <th>Subtotal (R$)</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($produtos as $i => $p): 
            $subtotal = $p["quantidade"] * $p["preco"];
            $totalGeral += $subtotal;
        ?>
        <tr>
            <td><?= htmlspecialchars($p["nome"]) ?></td>
            <td><?= $p["quantidade"] ?></td>
            <td><?= number_format($p["preco"], 2, ',', '.') ?></td>
            <td><?= number_format($subtotal, 2, ',', '.') ?></td>
            <td>
                <a class="button" href="editar.php?id=<?= $i ?>">Editar</a>
                <a class="button button-danger" href="deletar.php?id=<?= $i ?>" onclick="return confirm('Excluir este produto?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Total em estoque: <strong>R$ <?= number_format($totalGeral, 2, ',', '.') ?></strong></h3>
</div>
