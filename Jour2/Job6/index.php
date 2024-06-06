<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="GET">
number: <input type="number" name= "Number">
<input type="submit">
  </form>
  <?php
  function nombre(){
if (isset ($_GET)){
  $number=$_GET["Number"];
  if($number % 2 ===0){
    echo "Nombre pair";
  } else{
    echo "Nombre impair";
  }
}
  }
  nombre();
  ?>
</body>
</html>