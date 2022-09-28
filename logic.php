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
$warningText = "";
$instructionText = "";
$instructionText2 = "";
$instructionText3 = "";
$arrow_RoomToBalcony=0;
$arrow_LivingToGate=0;
$arrow_RoomToGate=0;
$arrow_KitchenToGate=0;
$arrow_ToiletToGate=0;
$arrow_Gate=0;


function alarmJudge () {
    global $warningText;
    if ($warningText != "") {
        $newData = array('alarm' => 1, 'warningText' => $warningText);
    }
    else {
        $newData = array('alarm' => 0);
    }
    file_put_contents('alarm.json', json_encode($newData));
}

if ($Kitchen_fire == 1) {
    if ($KitchenGate_fire == 1) {
        $warningText .= "偵測到廚房內起火，並已延燒到廚房門口！";
        if ($Bedroom_body == 1) {
            $instructionText = "在臥室的人：請立即關上臥室門，並拿衣物等布類塞住門縫後，打119後向陽台外呼救。";
            $arrow_RoomToBalcony = 1;
        }
        if ($Livingroom_body == 1){
            $instructionText2 = "在客廳的人：請立即掩住口鼻後，向大門逃生。";
            $arrow_LivingToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Toilet_body == 1){
            $instructionText3 = "在廁所的人：請立即關上門，並拿衣物等布類塞住門縫後，打119等待救援。";
        }
    }
    elseif ($KitchenGate_smoke == 1 && $KitchenGate_fire == 0) {
        $warningText .= "偵測到廚房內起火，且煙霧已擴散至廚房門口！";
        if ($Kitchen_body == 1){
            $instructionText = "在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上廚房門後，向大門逃生。";
            $arrow_KitchenToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Bedroom_body == 1 ){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上廚房門後，向大門逃生。";
            $arrow_RoomToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Livingroom_body == 1){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上廚房門後，向大門逃生。";
            $arrow_LivingToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Toilet_body == 1){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上廚房門後，向大門逃生。";
            $arrow_ToiletToGate = 1;
            $arrow_Gate = 1;
        }
    }
    else {
        $warningText .= "偵測到廚房內起火！";
        if ($Kitchen_body == 1){
            $instructionText = "在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上廚房門後，向大門逃生。";
            $arrow_KitchenToGate= 1 ;
            $arrow_Gate = 1;
        }
        if ($Bedroom_body == 1){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上廚房門後，向大門逃生。";
            $arrow_RoomToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Livingroom_body == 1){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上廚房門後，向大門逃生。";
            $arrow_LivingToGate = 1;
            $arrow_Gate = 1;
        }
        if ($Toilet_body == 1){
            $instructionText2 = "不在廚房的人：若火勢小，請立即滅火；若火勢過大，請立即關上廚房門後，向大門逃生。";
            $arrow_ToiletToGate = 1;
            $arrow_Gate = 1;
        }
    }
}
if ($Kitchen_smoke == 1 && $Kitchen_fire == 0) {
    if ($KitchenGate_smoke == 1) {
        $warningText = "偵測到廚房內煙霧已擴散至廚房門口！";
        if ($instructionText == ""){
            $instructionText = "請立即打開抽油煙機，若有風險請立即使用滅火器。";
        }
    }
    else {
        $warningText .= "偵測到廚房內有煙霧！";
        if ($instructionText == ""){
            $instructionText = "請立即打開抽油煙機，若有風險請立即使用滅火器。";
        }
    }
}

if ($Bedroom_fire == 1) {
    $warningText .= "偵測到臥室內起火！";
    if ($Bedroom_body == 1){
        $instructionText = "在臥室的人：若火勢小，請立即滅火；若火勢過大，請立即向外並關上臥室門後，向大門逃生。";
        $arrow_RoomToGate= 1 ;
        $arrow_Gate = 1;
    }
    if ($Kitchen_body == 1){
        $instructionText2 = "不在臥室的人：若火勢小，請立即滅火；若火勢過大，請立即關上臥室門後，向大門逃生。";
        $arrow_KitchenToGate = 1;
        $arrow_Gate = 1;
    }
    if ($Livingroom_body == 1){
        $instructionText2 = "不在臥室的人：若火勢小，請立即滅火；若火勢過大，請立即關上臥室門後，向大門逃生。";
        $arrow_LivingToGate = 1;
        $arrow_Gate = 1;
    }
    if ($Toilet_body == 1){
        $instructionText2 = "不在臥室的人：若火勢小，請立即滅火；若火勢過大，請立即關上臥室門後，向大門逃生。";
        $arrow_ToiletToGate = 1;
        $arrow_Gate = 1;
    }
}
if ($Bedroom_smoke == 1 && $Bedroom_fire == 0) {
    $warningText .= "偵測到臥室內有煙霧！";
    if ($instructionText == ""){
        $instructionText = "請立即檢查插座，或是否有可燃物。若有風險請立即使用滅火器。";
    }
}

if ($Livingroom_fire == 1) {
    if ($Gate_smoke == 1) {
        $warningText .= "偵測到客廳起火，且煙霧已擴散至大門口！";
        if ($Bedroom_body == 1){
            $instructionText = "在臥室的人：請立即關上門，並拿衣物等布類塞住門縫後，打119後向陽台外呼救。";
            $arrow_RoomToBalcony= 1 ;
        }
        if ($Kitchen_body == 1 || $Toilet_body == 1){
            $instructionText2 = "不在臥室的人：請立即關上門，並拿衣物等布類塞住門縫後，打119等待救援。";
        }
    }
    else {
        $warningText .= "偵測到客廳起火！";
        if ($Livingroom_body == 1){
            $instructionText = "在客廳的人：若火勢小，請立即滅火；若火勢過大，請立即向大門逃生。";
            $arrow_LivingToGate= 1 ;
            $arrow_Gate = 1;
        }
        if ($Bedroom_body == 1){
            $instructionText2 = "不在客廳的人：若火勢小，請立即滅火；若火勢過大，請立即向大門逃生。";
            $arrow_RoomToGate= 1 ;
            $arrow_Gate = 1;
        }
        if ($Kitchen_body == 1){
            $instructionText2 = "不在客廳的人：若火勢小，請立即滅火；若火勢過大，請立即向大門逃生。";
            $arrow_KitchenToGate= 1 ;
            $arrow_Gate = 1;
        }
        if ($Toilet_body == 1){
            $instructionText2 = "不在客廳的人：若火勢小，請立即滅火；若火勢過大，請立即向大門逃生。";
            $arrow_ToiletToGate= 1 ;
            $arrow_Gate = 1;
        }
    }
}
if ($Livingroom_smoke == 1 && $Livingroom_fire == 0) {
    $warningText .= "偵測到客廳內有煙霧！";
    if ($instructionText == ""){
        $instructionText = "請立即檢查插座，或是否有可燃物。若有風險請立即使用滅火器。";
    }
}

if ($Toilet_CO == 1) {
    $warningText .= "偵測到浴室內一氧化碳濃度過高！";
    if ($instructionText == ""){
        $instructionText = "請打開浴室窗戶";
    }
}

alarmJudge();

echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");
echo ("{");
echo ("window.location.reload();");
echo ("}");
echo ("setTimeout('fresh_page()',1000);"); //1秒刷新一次
echo ("</script>");
?>
