<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.login.css">
    <title>管理者用ログイン</title>
</head>

<body>
    <header>
        </nav>
    </header>
    <div class="form-wrapper">
    <h1>管理者ログイン</h1>
    <p>ログインできませんでした。ID PWを確認してください。</p>
    <div class="form-item">
    <form name="login" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        パスワード:<input type="password" name="lpw" />
        <div class="button-panel">
        <input type="submit" value="LOGIN" />
    </div>
    </form>
</div>
<!-- <div class="form-footer">
    <p><a href="#">アカウントをつくる</a></p>
</div> -->
</div>



</body>

</html>