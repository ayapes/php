<?php
require_once './DbManager.php';

session_start();
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました。');
}

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO applemusic(title, artist, fav, type ,memo) VALUES(:title, :artist, :fav, :type ,:memo)');
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':artist', $_POST['artist']);
    $stt->bindValue(':fav', $_POST['fav']);
    $stt->bindValue(':type', $_POST['type']);
    $stt->bindValue(':memo', $_POST['memo']);
    /*
  $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(?, ?, ?, ?, ?)');
  $stt->bindValue(1, $_POST['isbn']);
  $stt->bindValue(2, $_POST['title']);
  $stt->bindValue(3, $_POST['price']);
  $stt->bindValue(4, $_POST['publish']);
  $stt->bindValue(5, $_POST['published']);
*/
    $stt->execute();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/thankyou.html');
} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}
