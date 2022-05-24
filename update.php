<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
   
   $connection = mysqli_connect("127.0.0.1","root","root"); 
   $db = mysqli_select_db($connection,"csblog");
   
   if(isset($_POST['title'])) {
   $title = $_POST['title']; 
   $image = $_POST['image'];
   $content = $_POST['content'];
   $id = $_GET['id'];

   $select = mysqli_query($connection, "SELECT * FROM `posts` WHERE `title` = '$title' AND NOT `id` = '$id'");
   if (mysqli_num_rows($select)  === 0){
   //записей нет, можно обновлять
   $result;
   }
   else{
   echo 'Такой пост уже есть,к сожалению нельзя обновить';
   exit;
   }

   $update = "UPDATE posts SET title='{$title}', image='{$image}', content='{$content}' WHERE id={$id}";
   $result = mysqli_query($connection,$update);
   
    
   }
   if($result)
   {
    echo 'Пост обновлен';
   }
   else {
    echo 'пост не был обновлен';
   }
   
    ?>
   <p><h3><strong>Редактировать</strong></h3></p> 
     <form action="" class="form-signin" method="POST"> 
    <input type="text" name="title" placeholder = "title">
    <input type="text" name="image" placeholder = "image">
    <input type="text" name="content" placeholder = "content">
    <input type="submit" name="but" value="Редактировать">
    <a href = "home.php" class="btn btn-lg btn-primary btn-block">Главное меню</a>
    </form> 
</body>
</html>
