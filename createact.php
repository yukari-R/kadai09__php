<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- データを登録するページ -->
    <meta charset="UTF-8">
    <title>ユーザー登録</yu-za-></title>
    <link href="css/style.post.css" rel="stylesheet">
    <style>
        div {
            margin: 0 auto;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Main[Start] -->
    <div class="post">
    <form method="post" action="./insertact.php" enctype="multipart/form-data">
        <div class="jumbotron">
                ID:<textArea name="lid" rows="1" cols="20"></textArea><br>
                PW:<textArea name="lpw" rows="1" cols="20"></textArea><br>
                <input type="submit" value="送信" class="btn">
        </div>
    </form>
    </div>
    <!-- Main[End] -->

</body>
</html>