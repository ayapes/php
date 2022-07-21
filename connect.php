<?php


$dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
// ネットワーク上で個々を特定するためのアドレスをIPアドレスと言い、IPアドレスの中で自らを指すものをループバックアドレスと言います。
// ループバックアドレスとして利用できる範囲のIPアドレスは「127.0.0.0」～「127.255.255.254」で主に使用されるのは「127.0.0.1」です。
$usr = 'root';
$passwd = 'mariadb';

try {
    // データベースに接続するためのインスタンスを作る
    $db = new PDO($dsn, $usr, $passwd);
    // この専用のインスタンスによってつながった！
    print '接続に成功しました☆';
} catch (PDOException $e) {
    die("接続エラー :{$e->getMessage()}");
} finally {
    $db = null;
}
