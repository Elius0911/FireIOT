<?php
require_once 'logic.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

    <script type="application/javascript">
        function blink() {
            KF_flash.style.visibility = (KF_flash.style.visibility=="hidden")?"visible":"hidden";
            /*KS_flash.style.visibility = (KS_flash.style.visibility=="hidden")?"visible":"hidden";*/
            setTimeout("blink()", 500);
        }
    </script>

    <head>
        <link rel="stylesheet" href="haha.css">
    </head>

<body onload="blink();">    
    <center><b><font color="red" size="6">
        <?php echo $warningText?><br>
        <?php echo $instructionText?><br>
        <?php echo $instructionText2?><br>
        <?php echo $instructionText3?><br>
    </font></b></center>
    <img src="picture/floorPlan.jpg" width="1000" height="730" style="float:left;margin:0px 50px 0px 180px">
    <?php
        echo '<img src = "picture/redCircle.png">';
        if ($Kitchen_fire == 1)
            echo '<div id="KF_flash"><img src = "picture/red.png"/></div>';
        /*echo '<img src = "picture/redCircle.png">';
        if ($Kitchen_smoke == 1)
            echo '<div id="KS_flash"><img src = "picture/red.png"/></div>';*/
    ?>
    <right><a><font size="8">燈號說明：<br><span style="color:red">● 紅色</span>：火焰感測器<br><span style="color:orange">● 橘色</span>：煙霧感測器<br><span style="color:blue">● 藍色</span>：一氧化碳感測器<br><span style="color:green">● 綠色</span>：人體感測器</font></a></right>
</body>