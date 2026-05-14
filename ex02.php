<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Projeção de Crescimento Populacional</h2>
    <form method="post">
        Nome do País:
        <input type="text" name="pais" require><br><br>
        População Atual
        <input type="text" name="populacao" require><br><br>
        Ano Atual
        <input type="number" name="anoA" require><br><br>
        Ano Futuro
        <input type="number" name="anoF"require><br><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $pais = $_POST["pais"];
        $populacao = $_POST["populacao"];
        $anoF = $_POST["anoF"];
        $anoA = $_POST["anoA"];
        $taxa = 0.009; // 0,9%
        $ano = $anoA;
        while ($ano < $anoF) {
            $populacao = $populacao + ($populacao * $taxa);
        }
        echo "<h3>Resultado</h3>";
        echo "Pais: $pais <br>";
        echo

    }
</body>
</html>