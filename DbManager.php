<?php
function getDb(): PDO{

    $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
    $usr = 'root';
    $passwd = 'mariadb';

    // データベースへの接続を確立
    $db = new PDO($dsn, $usr, $passwd);
    return $db;
}
