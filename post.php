<?php
session_start();
require_once('function.php');
loginCheck();


$id = $_GET['id'];
$pdo = db_conn();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- データを登録するページ -->
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/style.post.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
            <div class="header">
                <div class="header_post"><a class="header_post_link" href="post.php">アイテムを追加</a>
            </div>
            </div>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="post">
    <form method="post" action="./insertimg.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <img id ="preview">
            <input type ="file" name="file" onchange="previewFile(this);"><br>
            <div class="post_select">
            <select name="type">
                <option value="" selected="selected">選択してください</option>
                <option value="01tops">tops</option>
                <option value="02bottoms">bottoms</option>
                <option value="03dresses">dresses</option>
                <option value="04outer">outer</option>
                <option value="05others">others</option></select>
            </div>
                <textArea name="comment" rows="4" cols="40"></textArea><br>
                <input type="submit" value="送信" class="btn">
        </div>
    </form>
    </div>
    <!-- Main[End] -->

    <a  href="cart.php"><img src="サイドテーブルアイコン.png" class="fixedicon"></a>

</body>
</html>
<script>
function previewFile(event){
    var fileData = new FileReader();
    fileData.onload = (function() {
    document.getElementById('preview').src = fileData.result;
    });
    fileData.readAsDataURL(event.files[0]);
}
</script>
