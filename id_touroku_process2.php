<?php
require_once './DbManager.php';

session_start();
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました。');
}
// $stt という変数もなんでもOK多分statementの略かな？ぐらいの勢い。
try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO testnum(num) VALUES(:num)');
    $stt->bindValue(':num', $_POST['num']);
    $stt->execute();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/id_touroku3.php');
} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}
