<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <?php
    function InsertIntoArray($string, $value) {
      echo "Arreglo original: " . $string . "<br>";
      echo "Valor a insertar: " . $value . "<br>";
      $array = explode( " ", $string);
      //echo '<pre>'; print_r($array); echo '</pre>';
      $insertPosition = rand(0 , sizeof($array));
      $newArray = array_merge(array_slice($array,0,$insertPosition), array($value), array_slice($array,$insertPosition));
      //echo '<pre>'; print_r($newArray); echo '</pre>';
      echo "Arreglo final: ";
      foreach($newArray as $value){
        echo $value . " ";
      }
    }

    if(isset($_GET['action'])=='insertValue') {
      InsertIntoArray($_POST['string'], $_POST['value']);
    }else {
  ?>
    <form action="?action=insertValue" method="post">
      <input type="text" name="string" placeholder="Inserte arreglo de valores separados por coma" style="width: 280px">
      <br>
      <input type="text" name="value" placeholder="Inserte nuevo valor" style="width: 120px">
      <br>
      <input type="submit" value="Insertar">
    </form>
  <?php
    }
  ?>
</body>
</html>

