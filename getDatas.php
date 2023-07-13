<?php
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    $uri = $_SERVER["REQUEST_URI"];

    if(strpos($uri, "Details.php") !== false){
        $imageId = $_GET["id"];
        $sql = "SELECT * FROM gs_bm_table WHERE id = ". $imageId;
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $data["image"] = $sth->fetch ();


    }else{
    $sql = "SELECT * FROM gs_bm_table ORDER BY create_date DESC";
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $data = $sth->fetchAll();

    return $data;
}
}

catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMesßage());
}

// prepare 準備　execute 実行 fetchALL全て取り出す
?>