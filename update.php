<?php
$id = $_GET['id'];
$pdo = db_conn();

$id = $_POST["id"];
$comment = $_POST["comment"];

try {
  //ID:'root', Password: xamppは 空白 ''　ローカル環境ならrootでOK
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMesßage());
}


$sth = $pdo->prepare("UPDATE gs_bm_table SET comment = :comment WHERE id = :id;");
$sth->bindValue(":id", $id,PDO::PARAM_INT);
$sth->bindValue(":comment", $comment, PDO::PARAM_STR);
$status = $sth->execute();

$result="";
if($status === false){
    $error = $sth->errorInfo();
    exit("SQLError" . print_r($error,true));
}else{
    $result = $sth->fetch();
    header("Location:" . "./index.php", true, 303);
    exit();

}
