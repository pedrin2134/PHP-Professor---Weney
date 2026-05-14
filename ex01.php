<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>DIGITE A PRIMEIRA NOTA</label><br>
        <input type="number" nome="num1" require><br>
        <label>DIGITE A SEGUNDA NOTA</label><br>
        <input type="number" nome="num2" require><br>
        <label>DIGITE A TERCEIRA NOTA</label><br>
        <input type="number" nome="num3" require><br>
        <label>DIGITE A QUARTA NOTA</label><br>
        <input type="number" nome="num4"><br>
        <input type="submit" value="CALCULAR">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $num4 = $_POST["num4"];
            $media = ($num1+$num2+$num3+$num4)/4;

            if ($media > 0 && $media <5){
                echo "Estudante reprovado. Nota: $media";             
            }elseif ($media >= 5 && $media < 7){
                echo "Estudante em recuperação. Nota: $media";
            }elseif ($media >= 7 && $media <10){
                echo "Aprovado. Nota: $media";
            }else{
                echo "nota invalida";
            }
        }
    ?>
</body>
</html>