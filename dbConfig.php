<?php
// DB接続

try {
  //ID:'root', Password: xamppは 空白 ''　ローカル環境ならrootでOK
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMesßage());
}
// new PDO class 接続した情報が$pdoの中に入っているイメージ

?>