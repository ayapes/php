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
    <style>
        #wrapper{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #box{
            width: 80%;
            max-width: 350px;
            padding: 2rem;
            border:1px solid #000;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="wrapper">
        <div id="box"> 
   <form method="POST" action="id_touroku2_3.php">
   <br>入力したIDは<?php echo $_SESSION['id1']; ?>ですか？
   <input type="submit" value="OK" id="push2">

   </form> </div></div>
</body>
</html>