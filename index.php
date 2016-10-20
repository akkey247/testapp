<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$url = parse_url(getenv('DATABASE_URL'));
$conn = "host=".$url['host']." dbname=".$url['path']." user=".$url['user']." password=".$url['pass'];
$conn = "host=ec2-54-163-240-101.compute-1.amazonaws.com dbname=d1veaqbn0k62ec user=fvyxrngiifinat password=ElEjbJWbzUw5xnjOoRgG-nNJ1x";
$link = pg_connect($conn);
if (!$link) {
    print($conn);
    die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');

// PostgreSQLに対する処理

$close_flag = pg_close($link);

if ($close_flag){
    print('切断に成功しました。<br>');
}

?>
</body>
</html>