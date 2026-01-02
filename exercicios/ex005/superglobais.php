<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                print "<h1>Superglobal GET</h1>"; // PEGA SÓ PELA URL
                var_dump($_GET); // Query String -> é a solicitação (URL quando tem parâmetros como nome, idade e etc...)

                print "<h1>Superglobal POST</h1>"; // PEGA SÓ POR PACOTE
                var_dump($_POST);

                print "<h1>Superglobal REQUEST</h1>"; // PEGA DOS 2 E GERA SOMENTE UM VETOR COM OS 2
                var_dump($_REQUEST);

                print "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                print "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                print "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                //foreach (getenv() as $c => $v) {
                //    print "</br> $c -> $v";
                //}

                print "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                print "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>