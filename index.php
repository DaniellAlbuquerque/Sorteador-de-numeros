<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Numeros aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Sorteador de números</h1>
        <?php
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "<p>Gerando número aleatório entre $min e $max .... <br>O número gerado é 
         <strong>$num</strong></p>";
        ?>
        <button type="button" onclick="javascript:document.location.reload()">&#x1F504;Gerar número</button>
    </main>


</body>

</html>