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
$cores[0] = "Azul";
$cores[1] = "Amarelo";
$cores[2] = "Verde";
$cores[3] = "Roxo";
 
// ordem original
for($i = 0; $i < count($cores); $i++)
  echo $cores[$i] . "<br>";
   
echo "<br>";  
   
// inverte a ordem dos elementos
$cores = array_reverse($cores, false);
 
// ordem invertida
for($i = 0; $i < count($cores); $i++)
  echo $cores[$i] . "<br>";
?>
</body>
</html>