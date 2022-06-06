<?php

if(isset($_GET["DataPack"])) {
   $DataPack = $_GET["DataPack"];
   $Datas = mb_split(",", $DataPack);
   print_r($Datas);

   $servername = "localhost";
   $username = "root";
   $password = "password";
   $database_name = "db_esp32";
   //require_once 'database.php';

   $connection = new mysqli($servername, $username, $password, $database_name);
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   }

   $sql = "UPDATE `tbl_temp` SET `lol` = " .  $temperature . " WHERE " . "1";

   if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $connection->error;
   }

   $connection->close();
} else {
   echo "Error : (";
}
?>