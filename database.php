<?php
$host = 'localhost';
$dbUser ='root';
$dbPassword = 'root';
$dbName = 'fire';
$connection = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if ($connection)
    mysqli_query($connection, 'SET NAMES UTF8');
else
    echo "資料庫連接失敗</br>" . mysqli_connect_error();
?>