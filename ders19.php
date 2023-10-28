<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 



echo"<pre>";
echo print_r($_POST['yukle']);
echo "</pre>";




?>
 <h1> Dosya yükleme alanı</h1>
 <form action="" method="POST">
    <input type="file" name="yukle[]" id="">
    <button type="submit" >Gönder</button>
 </form>
 <br>
 <button id="add"> Ekle </button>

<link src="bootstrap/node_modules/bootstrap/dist/css/bootstrap.css">
<script src="js/node_modules/jquery/dist/jquery.js"></script>
<script src="js/node_modules/jquery/dist/index.js"></script>
</body>
</html>