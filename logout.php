<?php
session_start();

//SESSIONを初期化
$_SESSION = [];

//SessionIDの保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
    setcookie(session_name(), '', time() - 42000, '/');
}

//サーバ側での、セッションIDの破棄
session_destroy();

//index.phpへリダイレクト
header("Location: index.php");
exit();
