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
    function StringToDate($dateString) {
      $date = strtotime($dateString);
      $newformat = date('Y-m-d',$date);
      echo $newformat;
    }

    if(isset($_GET['action'])=='convertDate') {
      StringToDate($_POST['dateString']);
    }else {
  ?>
    <form action="?action=convertDate" method="post">
      <input type="text" name="dateString" placeholder="Ingrese la fecha" style="width: 200px">
      <input type="submit" value="Convertir fecha">
    </form>
  <?php
    }
  ?>
</body>
</html>

