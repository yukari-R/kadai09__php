<?php

//  フォームから送られてくるデータを受け取り、DBに接続、格納する、という流れ

$comment = $_POST["comment"];
$type = $_POST["type"];

include("dbConfig.php");

$targetDirectory = "images/";
$fileName = basename($_FILES["file"]["name"]);

$targetFilePath = $targetDirectory . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


// ここまでOK

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($fileName)){
    $arrImageTypes = array("jpg","png","jpeg","gif","pdf");
    if(in_array($fileType, $arrImageTypes)){
    $postImageForSever = move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath);
      // move upload file ファイルをImagesフォルダに格納する

    if($postImageForSever){
        $insert = $pdo->prepare("INSERT INTO gs_bm_table (filename, comment, type) VALUES(:filename,:comment,:type)");

        $insert->bindValue(':filename', $fileName, PDO::PARAM_STR);
        $insert->bindValue(':comment', $comment, PDO::PARAM_STR);
        $insert->bindValue(':type', $type, PDO::PARAM_STR);
        $status = $insert->execute();
    }
}
}

header("Location:" . "./index.php", true, 303);
exit();

//
// ?>
