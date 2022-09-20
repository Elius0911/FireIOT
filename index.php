<?php
/*require_once 'logic.php';*/
?>

<!doctype html>
    <html lang = "zh-Hant-TW">
    <head>
        <link rel="stylesheet" href="haha.css">
    </head>

<body onload="blink();">    
    <div class="cc">
    <center><b><font size="6">
        <a>~~~~~~~~~指示~~~~~~~~~</a><br><a>~~~~~~~~~指示~~~~~~~~~</a><br><a>~~~~~~~~~指示~~~~~~~~~</a><br><a>~~~~~~~~~指示~~~~~~~~~</a>
    </font></b></center>
    </div>

    <div class="floor">
        <span class="KitchenFire"><img src="picture/redCircle.png" width="50" height="50" ></span>
        <span class="KitchenPeople"><img src="picture/greenCircle.png" width="50" height="50" ></span>
        <span class="KitchenSmoke"><img src="picture/orangeCircle.png" width="50" height="50" ></span>
        <span class="BethroomPeople"><img src="picture/greenCircle.png" width="50" height="50" ></span>
        <span class="BethroomCO1"><img src="picture/blueCircle.png" width="50" height="50" ></span>
        <span class="DoorFire"><img src="picture/redCircle.png" width="50" height="50" ></span>
        <span class="DoorSmoke"><img src="picture/orangeCircle.png" width="50" height="50" ></span>
        <span class="TVSmoke"><img src="picture/orangeCircle.png" width="50" height="50" ></span>
        <span class="TVFire"><img src="picture/redCircle.png" width="50" height="50" ></span>
        <span class="LivingroomSmoke"><img src="picture/orangeCircle.png" width="50" height="50" ></span>
        <span class="LivingroomPeople"><img src="picture/greenCircle.png" width="50" height="50" ></span>
        <span class="BedroomSmoke"><img src="picture/orangeCircle.png" width="50" height="50" ></span>
        <span class="BedroomPeople"><img src="picture/greenCircle.png" width="50" height="50" ></span>
        <span class="BedroomFire"><img src="picture/redCircle.png" width="50" height="50" ></span>
        <img src="picture/floorPlan.jpg" width="1000" height="730" style="float:left;margin:0px 50px 0px 180px" alt="">
    </div>
    
    <?php
        /*echo '<img src = "picture/redCircle.png">';
        if ($Kitchen_fire == 1)
            echo '<div id="redCircle.png"><img src = "picture/red.png"/></div>';
        /*echo '<img src = "picture/redCircle.png">';
        if ($Kitchen_smoke == 1)
            echo '<div id="KS_flash"><img src = "picture/red.png"/></div>';*/
    ?>
    <right><a><font size="8">燈號說明：<br><span style="color:red">● 紅色</span>：火焰感測器<br><span style="color:orange">● 橘色</span>：煙霧感測器<br><span style="color:blue">● 藍色</span>：一氧化碳感測器<br><span style="color:green">● 綠色</span>：人體感測器</font></a></right>
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