<?php

ini_set('display_errors', 'On');


// ログインフォームで入力された情報を受け取ってデータベースに情報があるかを探す
session_start();

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//1.  DB接続
require_once('function.php');
$pdo = db_conn();

//2. データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE(lid = :lid AND lpw = :lpw AND kanri_flg = 1)');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();

if( $val['id'] != ''){
    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION["chk_ssid"] = session_id(); //session id（鍵）を入れる
    $_SESSION["kanri_flg"] = $val["kanri_flg"];
    header('Location: post.php');
}else{
    //Login失敗時
    header('Location: relogin.php');
}

exit();
