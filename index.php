<?php
require_once 'logic.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

    <head>
        <link rel="stylesheet" href="haha.css">
    </head>

<body>    
    <div class="cc">
        <center><b><font color="red" size="6">
            <?php echo $warningText?><br>
            <?php echo $instructionText?><br>
            <?php echo $instructionText2?><br>
            <?php echo $instructionText3?><br>
        </font></b></center>
    </div>

    <div class="floor">
        <?php
        if ($Kitchen_fire == 0)
            echo '<span class="Kitchen_fire"><img src = "picture/redCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Kitchen_fire"><img src = "picture/red.png" width="50" height="50" /></span>';

        if ($Kitchen_smoke == 0)
            echo '<span class="Kitchen_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Kitchen_smoke"><img src = "picture/orange.png" width="50" height="50" /></span>';

        if ($Kitchen_body == 0)
            echo '<span class="Kitchen_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Kitchen_body"><img src = "picture/green.png" width="50" height="50" /></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        
        if ($KitchenGate_fire == 0)
            echo '<span class="KitchenGate_fire"><img src = "picture/redCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="KitchenGate_fire"><img src = "picture/red.png" width="50" height="50" /></span>';

        if ($KitchenGate_smoke == 0)
            echo '<span class="KitchenGate_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="KitchenGate_smoke"><img src = "picture/orange.png" width="50" height="50" /></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

        if ($Bedroom_fire == 0)
            echo '<span class="Bedroom_fire"><img src = "picture/redCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Bedroom_fire"><img src = "picture/red.png" width="50" height="50" /></span>';

        if ($Bedroom_smoke == 0)
            echo '<span class="Bedroom_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Bedroom_smoke"><img src = "picture/orange.png" width="50" height="50" /></span>';

        if ($Bedroom_body == 0)
            echo '<span class="Bedroom_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Bedroom_body"><img src = "picture/green.png" width="50" height="50" /></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

        if ($Livingroom_fire == 0)
            echo '<span class="Livingroom_fire"><img src = "picture/redCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Livingroom_fire"><img src = "picture/red.png" width="50" height="50" /></span>';

        if ($Livingroom_smoke == 0)
            echo '<span class="Livingroom_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Livingroom_smoke"><img src = "picture/orange.png" width="50" height="50" /></span>';

        if ($Livingroom_body == 0)
            echo '<span class="Livingroom_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Livingroom_body"><img src = "picture/green.png" width="50" height="50" /></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
            
        if ($Gate_smoke == 0)
            echo '<span class="Gate_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Gate_smoke"><img src = "picture/orange.png" width="50" height="50" /></span>';

        if ($Toilet_CO == 0)
            echo '<span class="Toilet_CO"><img src = "picture/blueCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Toilet_CO"><img src = "picture/blue.png" width="50" height="50" /></span>';

        if ($Toilet_body == 0)
            echo '<span class="Toilet_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Toilet_body"><img src = "picture/green.png" width="50" height="50" /></span>';
        ?>
        <img src="picture/floorPlan.jpg" width="1000" height="730" style="float:left;margin:0px 50px 0px 180px" alt="">
    </div>
    
    <center><b><font color="red" size="6">
        <?php echo $warningText?><br>
        <?php echo $instructionText?><br>
        <?php echo $instructionText2?><br>
        <?php echo $instructionText3?><br>
    </font></b></center>
    <img src="picture/floorPlan.jpg" width="1000" height="730" style="float:left;margin:0px 50px 0px 180px">
    
    <right><a><font size="8">燈號說明：<br><span style="color:red">● 紅色</span>：火焰感測器<br><span style="color:orange">● 橘色</span>：煙霧感測器<br><span style="color:blue">● 藍色</span>：一氧化碳感測器<br><span style="color:green">● 綠色</span>：人體感測器</font></a></right>
</body>