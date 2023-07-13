<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像一覧</title>
    <link href="css/style.css" rel="stylesheet">
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
                <div class="header_post"><a class="header_post_link" href="login.php">アイテムを追加</a></div>
            </div>
    </header>
    <!-- Head[End] -->


    <!-- Main[Start] -->
    <?php include("getDatas.php") ?>
    <div class="imageList">
        <?php foreach($data as $image){ ?>
            <a href="Details.php?id=<?php echo $image["id"]; ?>"><img src="images/<?php echo $image["filename"]; ?>" alt="投稿画像"></a>
            <?php };?></div>
    <!-- Main[End] -->

    <a  href="cart.php"><img src="サイドテーブルアイコン.png" class="fixedicon"></a>

</body>

</html>
