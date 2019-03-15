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
    function Multiplo2($number) {
      if($number % 2 == 0) {
        echo "El numero es multiplo de 2";
      } else {
        echo "El numero es impar";
      }
    }

    if(isset($_GET['action'])=='multiplo2') {
        Multiplo2($_POST['number']);
    }else {
  ?>
    <form action="?action=multiplo2" method="post">
      <input type="text" name="number" placeholder="Inserte el numero a comprobar" style="width: 200px">
      <input type="submit" value="Comprobar">
    </form>
  <?php
    }
  ?>
</body>
</html>

