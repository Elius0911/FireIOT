<?php
require_once 'database.php';

$sensors = ["Kitchen_fire",
            "Kitchen_smoke",
            "Kitchen_people",
         ];

if(isset($_GET["DataPack"])) {
   $DataPack = $_GET["DataPack"];
   $Datas = mb_split(",", $DataPack);
   print_r($Datas);
}
else {
   echo "Error : (";
}

function Update ($sensor, $data, $connec) {
   for ($index = 0; $index <= count($data); $index++) {
      $sql = "UPDATE `sensor` SET `" . $sensor[$index] . "` = " . $data[$index] . " WHERE 1";
      if ($connec->query($sql) === TRUE) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . " => " . $connec->error;
      }
   }
}

Update($sensors, $Datas, $connection);
$connection->close();
?>