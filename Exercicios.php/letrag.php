<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php



    if (isset ($_GET['numeros'])) {

        $numeros = explode (",", $_GET ['numeros']);
        if (is_array ($numeros)) {
            $soma = 0;
            foreach ($numeros as $numero) {
                $soma += $numero;
            }
        }
        echo "Soma: " . $soma;
        

    }

    

    ?>
</body>
</html>