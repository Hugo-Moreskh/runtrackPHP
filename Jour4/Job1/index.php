<?php
session_start();
if(!isset ($_SESSION["nbVisites"])){
  $_SESSION["nbVisites"]=0;
}
if($_SERVER['REQUEST_METHOD']==='POST'){
  $_SESSION["nbVisites"]= 0;
}else{
  $_SESSION["nbVisites"] ++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Nombre de visites : <?php echo $_SESSION["nbVisites"]; ?></h2>
  <form method="post" action="">
    <button type="submit">Reset</button>
  </form>
</body>
</html>