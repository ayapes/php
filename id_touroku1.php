<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="id_touroku2.php">
        <div id="wrapper">
            <div id="box">
            <label for="title">ID:</label>
            <input id="num" type="text" name="num" size="25">
            <input type="submit" value="登録" id="push">
            <?php
        session_start();
        $token = uniqid(bin2hex(random_bytes(13)), true);
        $_SESSION['token'] = $token;
        ?>
        <input type="hidden" name="token" value="<?php print $token; ?>">
            </div>
        </div></form>
</body>
</html>