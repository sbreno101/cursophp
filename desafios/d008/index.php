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
        $raiz = $_GET['n1'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Número</label>
            <input type="number" name="n1" id="n1" value="<?php print $raiz?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $raizq = sqrt($raiz);
            $raizc = pow($raiz, 1/3);

            print "<p>Analisando o número $raiz, temos:</p>";
            print "<ul><li><p>A sua raiz quadrada é $raizq</li></p>";
            print "<li><p>A sua raiz cúbica é $raizc</p></li></ul>";
        ?>
    </section>
</body>
</html>