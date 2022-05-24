<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?
require ('./code/connection.php');


$password = $_POST['password'];
$username = $_POST['username'];
$email = $_POST['email'];

$update = "UPDATE users SET username='{$username}', email='{$email}', password='{$password}' WHERE id = '$_SESSION[id]'";
var_dump($update);
exit;
$result = mysqli_query($connection,$update);
?>



<div class="container"> 
    <form action="" class="form-signin" method="POST">  
     <h2>Изменение данных профиля</h2>
     <input type="text" name="username" class="form-control" placeholder="username" required>
     <input type="email" name="email" class="form-control" placeholder="email" required>
     <input type="password" name="password" class="form-control" placeholder="password" required>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Изменить данные</button>
     <a href = "home.php" class="btn btn-lg btn-primary btn-block">Главное меню</a>
    </form>
   </div>
</body>
</html>