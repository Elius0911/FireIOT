<?php
require_once 'database.php';

$sql = "SELECT * FROM `sensor` WHERE 1";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) { // fetch_assoc: 取得資料之值
    $Kitchen_fire = array_values($row)[0];
    $Kitchen_smoke = array_values($row)[1];
    $Kitchen_body = array_values($row)[2];
    $KitchenGate_fire = array_values($row)[3];
    $KitchenGate_smoke = array_values($row)[4];
    $Bedroom_fire = array_values($row)[5];
    $Bedroom_smoke = array_values($row)[6];
    $Bedroom_body = array_values($row)[7];
    $Livingroom_fire = array_values($row)[8];
    $Livingroom_smoke = array_values($row)[9];
    $Livingroom_body = array_values($row)[10];
    $Gate_smoke = array_values($row)[11];
    $Toilet_CO = array_values($row)[12];
    $Toilet_body = array_values($row)[13];
}


//function getOut_BedroomFire() {
//    global $instructionText;
//    $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上臥室門後向大門逃生";

/*if ($Bedroom_body == 1) {
    if ($Bedroom_fire == 1)
        $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上臥室門後向大門逃生。";
    elseif ($Bedroom_smoke == 1)
        $instructionText = "偵測到臥室內有煙霧，請立即檢查臥室內插座，或是否有可燃物。";
    elseif ($Kitchen_fire == 1) {
        if ($KitchenGate_fire == 1) {
            $instructionText = "在臥室的人：請立即關上臥室門，並拿衣物等布類塞住門縫後，向陽台外呼救。";
        }
        elseif ($KitchenGate_smoke == 1) {
            $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上廚房門後向大門逃生。";
        }
    }
    elseif ($Kitchen_smoke == 1) {
        $instructionText = "";
    }

}*/

if ($Bedroom_fire == 1) {
    $warningText = "偵測到臥室內起火！";
    if ($Bedroom_body == 1) 
        $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上臥室門後向大門逃生。";
    if ($Kitchen_body == 1)
        $instructionText2 = "在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上臥室門後向大門逃生。";
}
if ($Bedroom_smoke == 1 && $Bedroom_fire == 0) {
    $warningText = "偵測到臥室內有煙霧！";
    $instructionText = "請立即檢查臥室內插座，或是否有可燃物。";
}

if ($Kitchen_fire == 1) {
    $warningText = "偵測到廚房內起火！";
    if ($KitchenGate_fire == 1) {
        $warningText = "偵測到廚房內起火，並已延燒至廚房門口！";
        if ($Bedroom_body == 1)
            $instructionText = "在臥室的人：請立即關上臥室門，並拿衣物等布類塞住門縫後，向陽台外呼救。";
    }
    elseif ($KitchenGate_smoke == 1) {
        if ($Bedroom_body == 1)
            $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上廚房門後向大門逃生。";
        if ($Kitchen_body == 1)
            $instructionText2 = "在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上廚房門後向大門逃生。";
    }
    else {
        if ($Bedroom_body == 1)
            $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請向外並立即關上廚房門後向大門逃生。";
        if ($Kitchen_body == 1)
            $instructionText2 = "在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上廚房門後向大門逃生。";
    }
}
if ($KitchenGate_smoke == 1) {
    $warningText = "偵測到廚房內煙霧已擴散至廚房門口，請立即打開抽油煙機，並檢查...。";
}

print($instructionText);
?>
