<?php require_once '../selfphp/Encode.php'; ?>
<?php setcookie('num' , $_POST['num'] , time() + (60 * 60 * 24 * 90)); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="id_touroku_process.php">
   <br>入力したIDは<?php print $_POST['num']; ?>ですか？
   <input type="hidden" name="num" value="<?=e($_POST['num']);?>">
   <input type="submit" value="OK" id="push2">
   <?php
        session_start();
        $token = uniqid(bin2hex(random_bytes(13)), true);
        $_SESSION['token'] = $token;
        ?>
        <input type="hidden" name="token" value="<?php print $token; ?>">
   </form> 
</body>
</html>