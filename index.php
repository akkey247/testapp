<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$url = parse_url(getenv('DATABASE_URL'));

print('host: '.$url['host'].'<br>');
print('dbname: '.substr($url['path'], 1).'<br>');
print('user: '.$url['user'].'<br>');
print('password: '.$url['pass'].'<br>');

$conn = "host=".$url['host']
        ." dbname=".substr($url["path"], 1)
        ." user=".$url['user']
        ." password=".$url['pass'];
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