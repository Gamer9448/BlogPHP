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
   $connection = mysqli_connect("127.0.0.1","root","root","csblog",); 

   if(isset($_POST['title'])) {
   $title = $_POST['title']; 
   $image = $_POST['image'];
   $content = $_POST['content'];
   $category = $_POST['category'];
   
   
   
   $select = mysqli_query($connection, "SELECT * FROM `posts` WHERE `title` = '$title'");
   if (mysqli_num_rows($select) === 0){
   //записей нет, можно добавлять
   $result;
   }
   else{
   echo 'Такой пост уже есть,к сожалению нельзя добавить';
   exit;
   }
   $query = "INSERT INTO `posts` (`title`, `image`, `content`,`category`) VALUES ('$title','$image','$content','$category')"; 
   $result = mysqli_query($connection,$query);
   
   
   }
   if ($result) {
    echo 'Пост успешно добавлен';
    }

    else {
     echo 'Ошибка';
    }
 
    ?>

    <p><h3><strong>Добавить запись в БД</strong></h3></p> 
    <form action="" class="form-signin" method="POST"> 
     <input type="text" name="title" placeholder = "title">
     <input type="text" name="image" placeholder = "image">
     <input type="text" name="content" placeholder = "content">
    <select name="category">
     <option value="M">Выберите категории поста</option>
     <option value="PHP">PHP</option>
     <option value="PYTHON">PYTHON</option>
     <option value="GO">GO</option>
     <option value="JAVA">JAVA</option>
    </select>
    <input type="submit" name="but" value="Добавить">
 </form>
    <a href = "home.php" class="btn btn-lg btn-primary btn-block">Главное меню</a>


</body>
</html>

