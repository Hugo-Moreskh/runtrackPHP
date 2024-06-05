
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test php</title>
</head>
<body>
<form action="index.php" method="POST">
username: <input type="text" name="username"><br>
password: <input type="password" name="password"><br>
<input type="submit">
</form>
<?php
function onSubmit(){
  if($_POST != NULL){
    $username= $_POST["username"];
    $password= $_POST["password"];
    if($username=== "John" && $password=== "Rambo"){
      echo "Ce n'est pas ma guerre";
    } else{
      echo "Votre pire cauchemar";
    }
  }  
}
onSubmit();
?>
</body>
</html>