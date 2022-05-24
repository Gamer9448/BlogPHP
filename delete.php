<?php
$connection = mysqli_connect("127.0.0.1","root","root");
$db = mysqli_select_db($connection,"csblog");


if(isset($_POST['delete']))
{


$id = $_POST['id'];
$delete_sql = "DELETE FROM `posts` WHERE `posts`.`id` = {$id}";
$query_run = mysqli_query($connection,$delete_sql); 
}


if($query_run)
{
    echo 'Пост удалился успешно';
}
else {
    echo 'Пост не был удален';
}


?>

<a href = "home.php" class="btn btn-lg btn-primary btn-block">Главное меню</a>