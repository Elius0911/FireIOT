<?php
$host = 'localhost';
$dbUser ='root';
$dbPassword = 'password';
$dbName = 'fire';
$link = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if ($link)
    mysqli_query($link, 'SET NAMES UTF8');
else
    echo "資料庫連接失敗</br>" . mysqli_connect_error();
?>