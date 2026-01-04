<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $vsalario = $_GET['salario'] ?? 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="salario" value="<?php print $vsalario?>">
        <input type="submit" value="Calcular">
        <p>Considrando o salário mínimo de <strong>R$ 1.380</strong></p>
        </form>
    </main>
    <section>
        <h2>Resultado FInal</h2>
        <?php 
            $divsalario = intdiv($vsalario, 1380);
            $restosalario = $vsalario - ($divsalario * 1380);

            print "Quem recebe um salário de R$ $vsalario ganha $divsalario salário mínimo + $restosalario";
        ?>
    </section>
</body>
</html>