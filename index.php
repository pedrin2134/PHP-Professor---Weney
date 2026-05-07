<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="POST">
        <label>Digite um número de 1 a 4:</label><br><br>
        <input type="number" name="num" step="1" required/><br><br>
        <button type="submit">Responder</button><br><br>
    </form>
    
    <?php
    $num = $_POST['num'] ?? 0;
    switch ($num){
        case 1:
            echo "Primavera";
            break;
            
            case 2:
                echo "Verâo";
                break;

                case 3:
                    echo "Outono";
                    break;

                    case 4:
                        echo "Inverno";
                        break;

                        default:
                            echo "Estação invalida";
                            break;
    }
    ?>
</body>
</html>