<?php session_start();?>
<?php require_once '../selfphp/Encode.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo $_SESSION['pwd'];?>
<br>
<?php print $_SESSION['id1']; ?>を登録しました。<br>ありがとうございました
    <br>
<a href="id_touroku2_1.php">入力画面へ戻る</a>
</body>
</html>