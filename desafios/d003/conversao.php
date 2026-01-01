<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_REQUEST["din"] ?: 0;
            print "<p>Seus R$" . (number_format($real, 2, ",", ".")) . " equivalem a <strong> US$" . (number_format($real / 5.52, 2, "," , ".")) . "</strong><br></p>";
            print "<p><strong>A cotação fixa de R$ 5,52</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>