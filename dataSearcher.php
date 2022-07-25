<?php
require_once 'database.php';
require_once 'sensorList.php';

$sql = "SELECT * FROM `sensor` WHERE 1";
$result = $connection->query($sql);

if ($result) {
    echo    '<h1>查詢結果</h1>
            <table cellspacing="5", cellpadding="5", border="1", style="border-collapse:collapse">
            <tr>
                <td>Sensor Name</td> 
                <td>State</td>
            </tr>';

    $index = 0; // 資料索引值
    while ($row = $result->fetch_assoc()) { // fetch_assoc: 取得資料之值
        while ($index < count($row)) {
            $key = array_keys($sensors); //感測器名稱
            $value = array_values($sensors); //感測器之值

            $sensor = $key[$index];
            $state = $value[$index];
            echo    '<tr>
                        <td>' . $sensor . '</td>
                        <td>' . $state . '</td>
                    </tr>';
            $index++;
        }
    }
    mysqli_free_result($result); // 釋放記憶體
}
else {
    echo "{$sql} Error: " . mysqli_error($connection);
}

echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");
echo ("{");
echo ("window.location.reload();");
echo ("}");
echo ("setTimeout('fresh_page()',2000);"); //2秒刷新一次
echo ("</script>");
?>