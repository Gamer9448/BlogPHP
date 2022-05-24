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


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query ="INSERT INTO users (username , password , email) VALUES ('$username' , '$password', '$email' )";
    $result = mysqli_query($connection, $query);
    
  
  
    if($result){
     $smsg="Регистрация прошла успешно";
    }else{
     $fsmsg="Ошибка";
    }
  
   }
  

  ?>
  
   <div class="container"> 
    <form action="" class="form-signin" method="POST">  
     <h2>Регистрация</h2>
     <?php  if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
     <?php  if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
     <input type="text" name="username" class="form-control" placeholder="Username" required>
     <input type="email" name="email" class="form-control" placeholder="Email" required>
     <input type="password" name="password" class="form-control" placeholder="password" required>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
     <a href = "login.php" class="btn btn-lg btn-primary btn-block">Аутетнификация</a>
    </form>
   </div>
  </body>
  </html>

</body>
</html>

