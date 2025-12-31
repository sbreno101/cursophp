<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        $numero = 300;
        print "O valor da variável é $numero";

        echo "<br>";
        echo "<br>";

        $variavel = 300;
        var_dump($variavel);

        echo "<br>";
        echo "<br>";

        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);

        echo "<br>";
        echo "<br>";

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>