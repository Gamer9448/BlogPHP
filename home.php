<?php session_start(); ?>


<?php
session_start();
if (isset($_SESSION['username']) === false) {
echo "Ошибка";
exit;
}
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
require 'header.php';

?>
<style>
.post {
width: 250px; 
border: 1px solid black;
padding: 5px;
}

</style>

<div class="container">
<div class="posts">

<?php
include ('./code/connection.php');

$query = "SELECT * FROM posts ORDER BY id ASC";

$result = mysqli_query($connection, $query); 

while ($row = mysqli_fetch_array($result) ) {?>


<div class="post">
<h4><?php echo $row['title'];?></h4>
<p><?php echo mb_substr($row['content'],0,20);?></p>
<img scr=<?php echo $row['image'];?>>
<a href="post.php?id=<?php echo $row['id']; ?>"><button>Далее</button></a>




<form action="delete.php" method="post">
<input name="id" value="<?= $row['id'] ?>" hidden>
<button type="submit" name="delete" class="button">Удалить пост</button>
</form>

<a href="update.php?id=<?php echo $row['id']; ?>"><button>Редактировать</button></a>

</div>
<?php } ?>

</div>
</div>

</body>
</html>