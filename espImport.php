<?php
require_once 'database.php';
require_once 'sensorList.php';

if (isset($_GET["DataPack"])) {
   $DataPack = $_GET["DataPack"];
   $Datas = mb_split(",", $DataPack);
}
else {
   echo "Datas Import Error : (";
}

$index = 0;
while ($index < count($Datas)) {
   $sql = "UPDATE `sensor` SET `" . $sensors[$index] . "` = " . $Datas[$index] . " WHERE 1";
   if ($connection->query($sql) === true)
      $index++;
}

if ($index === count($Datas)) {
   echo "Data Update Success";
}
else {
   echo "Data Update Fail : (";
}

$connection->close();
?>