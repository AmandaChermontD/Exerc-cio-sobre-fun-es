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
    function celsius ($temperatura) {

        $c = ($temperatura-32)/18;
        return $c;
    }
    echo celsius (90) . "<br>";
    echo celsius (77) . "<br>";
    echo celsius (52) . "<br>";
    echo celsius (12) . "<br>";

    ?>



</body>
</html>