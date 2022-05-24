<?php session_start();
echo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?require ('./code/connection.php');
?>
<h4>Изменить изображение</h4>
<form method="post" action="upload.php" enctype="multipart/form-data">
<label for="inputfile">Upload File</label>
<input type="file" id="inputfile" name="inputfile"></br>
<input type="submit" value="Click To Upload">
</form>

<br></br>
<a href = 'updateprofile.php' class='btn btn-lg btn-primar'>Редактировать профиль</a>
</body>
</html>