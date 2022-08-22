<?php session_start();
$_SESSION['id1'] = $_POST['id1'];
$_SESSION['pwd'] = $_POST['pwd'];?>
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
   <form method="POST" action="id_touroku2_3.php">
   <br>入力したIDは<?php echo $_SESSION['id1']; ?>ですか？
   <input type="submit" value="OK" id="push2">

   </form> 
</body>
</html>