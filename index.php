<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora de IMC</title>
    </head>
    <body>
        <header>
            <h1>Calculadora de IMC</h1>
            <form method="POST" action="">
                <input required type="text" name="peso" placeholder="Digite seu peso"><br><br>
                <input required type="text" name="altura" placeholder="Digite sua altura"><br><br>
                <input type="submit" value="Calcular">
            </form>
        </header>
    </body>
</html>

<style>
html, body {
    height: 100%;
}

html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}
body {background-color: aliceblue;}

h1{color:blue}
</style>


<?php

if (isset($_POST["altura"]) && isset($_POST["peso"])) {
    $height = $_POST["altura"];
    $weight = $_POST["peso"];
    $imc = $weight / ($height * $height);
echo "<h2>Seu índice de massa corporal é de:</h2>" . $imc . "<br>";
if ($imc > 28) {
    echo "Você está acima do peso";
} else {
    echo "Parabéns! Você está no peso ideal";
}
}

// Just a coment

?>
