<?php

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

include("dbConfig.php");

$insert = $pdo->prepare("INSERT INTO gs_user_table (lid,lpw,kanri_flg) VALUES(:lid,:lpw,0)");
$insert->bindValue(':lid', $lid, PDO::PARAM_STR);
$insert->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $insert->execute();

    header("Location:" . "./index.php", true, 303);
    exit();
