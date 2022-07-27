<?php
require_once 'database.php';
require_once 'sensorList.php';

if (isset($_GET["DataPack"])) { //若收到資料包執行
   $DataPack = $_GET["DataPack"];
   $Datas = mb_split(",", $DataPack); //解析資料
}
else {
   echo "Datas Import Error : (";
}

$index = 0; //資料索引值
while ($index < count($Datas)) {
   $sql = "UPDATE `sensor` SET `" . $sensors[$index] . "` = " . $Datas[$index] . " WHERE 1"; //更新資料
   if ($connection->query($sql) === true)
      $index++;
}

if ($index == count($Datas)) { //若所有資料皆有收到, 顯示成功
   echo "Data Update Success <br>";
   echo "Data Import: ";
   print_r($DataPack);
}
else {
   echo "Data Update Fail : (";
}

$connection->close();
?>