<?php
    // 連結資料庫
    require_once 'database.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

<body>
    <h1>
        太水了啦
    </h1>
</body>

<?php
echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()"); 
echo ("{");
echo ("window.location.reload();");
echo ("}"); 
//echo ("setTimeout('fresh_page()',1000);"); //1秒刷新一次
echo ("</script>");
?>