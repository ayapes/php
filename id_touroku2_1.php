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
    <form method="POST" action="id_touroku2_2.php">
        <div id="wrapper">
            <div id="box">
                <label for="id1">ID</label>
                <br>
                <input id="id1" type="text" name="id1" size="25">
                <br>
                <label for="pwd">Password</label><br>
                <input id="pwd" type="text" name="pwd" size="25">
                <br>
                <input type="submit" value="登録" id="push">
            </div>
        </div>
    </form>
</body>

</html>