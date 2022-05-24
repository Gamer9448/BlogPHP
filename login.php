<?php session_start(); ?>

<?php
session_start();
$_SESSION['username'] = true;
$_SESSION['id'] = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php 

require ('./code/connection.php');
if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username']; 
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username='$username' and password='$password' ";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
    }
    
    else {
        $fmsg = "Ошибка";
    }
}   

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "Hello " . $username . "";
        echo " Нажми чтобы читать новости ==>";
        echo "<a href = 'home.php' class='btn btn-lg btn-primar'>Новости</a>";
    }
   
    
    ; ?>
    
    
   <div class="container"> 
    <form action="" class="form-signin" method="POST">  
     <h2>Аутентификация</h2>
     <input type="text" name="username" class="form-control" placeholder="Username" required>
     <input type="password" name="password" class="form-control" placeholder="password" required>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
     <a href = "reg.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
    </form>
   </div>

</body>
</html>

