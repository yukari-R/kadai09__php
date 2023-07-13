<?php
session_start();
require_once('function.php');
loginCheck();

if($_SESSION["kanri_flg"] == 1){

$id = $_GET['id'];
$pdo = db_conn();

include("dbConfig.php");

$targetDirectory = "images/";
$imageId = $_GET["id"];

if(!empty($imageId)){
    $sql = "SELECT filename FROM gs_bm_table WHERE id = ". $imageId;

    $sth = $pdo->prepare($sql);
    $sth->execute();
    $getImageName = $sth ->fetch();
}

$deleteImage = unlink($targetDirectory . $getImageName["filename"]);

if($deleteImage){
    $deleteRecord = $pdo->query("DELETE FROM gs_bm_table WHERE id = " .$imageId);

    if($deleteRecord){
        header("Location: index.php", true, 303);
        exit();
    }
}

}else{
    header('Location: relogin.php');
}

