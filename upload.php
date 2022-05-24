<?
session_start();
?>

<?php

$allowedExtensions = ['jpg', 'png',];
$extension = pathinfo($destiation_dir, PATHINFO_EXTENSION);
if (!in_array($extension, $allowedExtensions)) {
    echo 'Загрузка файлов с таким расширением запрещена!';
}


if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
$destiation_dir = dirname(__FILE__) .'/image/'.$_FILES['inputfile']['name']; // Директория для размещения файла
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'Файл загружен успешно'; 
}
else{
echo 'Файл не был загружен'; 
}


require ('./code/connection.php');
$query = "UPDATE users SET image='{$destiation_dir}' WHERE id = $_SESSION[id]";
$result = mysqli_query($connection,$query);


?>