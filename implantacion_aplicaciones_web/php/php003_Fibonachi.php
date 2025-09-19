<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonachi 10</title>
</head>
 



  <body>
    <?php 
      //Defino el limite
      $limite=10;
      //Establecer los primeros dos números
       
      $fibonacci=[0,1]
      
      for ($i=2;$i < $limite;$i++){
        $fibonacci[$i]=$fibonacci[i-1]+$fibonacci[$i-2];
      }
      //Mostrar la informacion
      echo "Los $limite primeros números de la serie de Fibonacci son:";
      foreach($fibonacci as $numero){
       echo $numero:",";}
      ?>
  </body>










 </html>