<?php
require_once 'database.php';

if(isset($_GET["DataPack"])) {
   $DataPack = $_GET["DataPack"];
   $Datas = mb_split(",", $DataPack);
   print_r($Datas);
   print($Datas[0]);

   $sql = "UPDATE `sensor` SET `Kitchen_fire` = " .  $Datas[0] . " WHERE " . "1";

   if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $connection->error;
   }

   $connection->close();
}
else {
   echo "Error : (";
}
?>