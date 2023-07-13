<?php
session_start();
require_once('function2.php');
loginCheck();

// var_dump($_POST);

$filename_cart = $_GET["filename_cart"];
$type_cart = $_GET["type_cart"];

include("dbConfig.php");

$insert = $pdo->prepare("INSERT INTO gs_bm_table2 (filename,type) VALUES(:filename,:type)");
$insert->bindValue(':filename', $filename_cart, PDO::PARAM_STR);
$insert->bindValue(':type', $type_cart, PDO::PARAM_STR);
$status = $insert->execute();

    header("Location:" . "./index.php", true, 303);
    exit();


?>
