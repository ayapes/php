<?php session_start();?>
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

        <?php
echo $_SESSION['pwd'];?>
<br>
<?php print $_SESSION['id1']; ?>を登録しました。<br>ありがとうございました
    <br>
<a href="id_touroku2_1.php">入力画面へ戻る</a>
        </div>
    </div>

</body>
</html>