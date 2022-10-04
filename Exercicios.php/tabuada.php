<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tabuada  </h1>
    <form action="" method="get">
  Tabuada do:  <input type="text" name="tab" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 
 <?php
 $tabuada = $_GET['tab'];
  $count=1;
  
  while($count<=10){
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";
   $count++;
  }
  

?>
</body>
</html>