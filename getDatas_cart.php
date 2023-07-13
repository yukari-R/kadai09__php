<?php
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    $sql = "SELECT * FROM gs_bm_table2 ORDER BY type ASC";
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $data = $sth->fetchAll();

    return $data;
}

catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMesßage());
}

?>