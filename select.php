<?php
// 查詢用
require_once 'database.php'; // 連結資料庫
//header('refresh: 1;url="http://localhost/select.php"');
?>

<h3>查詢結果</h3>

<?php
$datas = array(); // 資料暫存陣列
$sql = "SELECT * FROM `sensor`";
$result = mysqli_query($link, $sql);
$resultCount = mysqli_num_rows($result); // mysqli_num_rows: 回傳資料筆數

if ($result) {
    if ($resultCount > 0) 
        while ($row = mysqli_fetch_assoc($result)) // mysqli_fetch_assoc: 取得資料之值
            $datas[] = $row;
    mysqli_free_result($result); // 釋放記憶體
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}

if (!empty($result))
    print_r($datas);

else {
    echo "查無資料";
}
?>