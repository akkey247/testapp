<?php

$conn = "host=".$_GET['host']." dbname=".$_GET['dbname']." user=".$_GET['user']." password=".$_GET['pass'];
$link = pg_connect($conn);
if (!$link) {
    print($conn);
    die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。');

// PostgreSQLに対する処理

$close_flag = pg_close($link);

if ($close_flag){
    print('切断に成功しました。');
}

?>