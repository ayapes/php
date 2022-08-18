<?php require_once '../selfphp/Encode.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー情報</title>
</head>
<body>
    <form method="POST" action="cookie2.php">
<label for="email">メールアドレス</label>
<input type="text" id="email" name="email" size="40" value="<?=e($_COOKIE['email'] ?? '')?>">
<input type="submit" valur="送信">    
</form>
</body>
</html>