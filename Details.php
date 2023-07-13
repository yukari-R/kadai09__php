<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.detail.css" rel="stylesheet">
</head>
<body>
<header>
        <div class="header">
                <div class="header_post"><a class="header_post_link" href="post.php">アイテムを追加</a>
            </div>
        </div>
    </header>
<?php include("getDatas.php") ?> 
<div class="detail_image">
    <div class="image_box">
    <img src="images/<?php echo $data["image"]["filename"]; ?>" alt="投稿画像">
    </div>  
    <div class="comment">
        <h1>どんなアイテム？</h1>
        <p><?=htmlspecialchars($data["image"]["type"]) ?></p>
        <div class="comment_box">
        <p><?=htmlspecialchars($data["image"]["comment"]) ?></p>
    </div>
    </div>


            <div class="update_corner">
            <h2>説明を更新する</h2> 
            <form method="POST" action="update.php">
            <div class="jumbotron">
                    <input type="hidden" name="id" value="<?php echo $data["image"]["id"]; ?>"><br>
                    <textArea name="comment" rows="4" cols="40"><?=htmlspecialchars($data["image"]["comment"]) ?></textArea><br>
                    <input type="submit" value="更新" class="btn">
            </div></form>
            </div>
            <div class="delete_corner">
            <button class="btn" onclick="location.href='deleteImage.php?id=<?php echo $_GET["id"]; ?>';">削除</button></div>'
        <button onclick="location.href='./index.php';" class="btn">戻る</button>
    </div>

    <form method="GET" action="insert_cart.php">
        <input type="hidden" name="type_cart" value="<?php echo $data["image"]["type"]; ?>"><br>
        <input type="hidden" name="filename_cart" value="<?php echo $data["image"]["filename"]; ?>"><br>
        <input type ="submit" value="今日の服装に追加" class="btn_add">
    </form>
    

    <a  href="cart.php"><img src="サイドテーブルアイコン.png" class="fixedicon"></a>



</body>
</html>