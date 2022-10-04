<?php
require_once 'logic.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

    <head>
        <link rel="stylesheet" href="haha.css">
    </head>

<body>
    <div class="top">
        <div class="warning">
            <?php 
                if ($warningText != "")
                    echo "警告：" . $warningText;
            ?>
        </div>

        <div class="instructionText">
            <?php
                if ($instructionText != "" && ($instructionText_Kitchen != "" || $instructionText_Bedroom != "" || $instructionText_Livingroom != "" || $instructionText_Toilet != ""))
                    echo "逃生指示：";
                elseif ($instructionText != "")
                    echo "指示：";
            ?>
                
        </div>
        <div class="instruction">
            <?php
                if ($instructionText != "")
                    echo $instructionText . "<br>";
                if ($instructionText_Kitchen != "")
                    echo "●　" . $instructionText_Kitchen . "<br>";
                if ($instructionText_Bedroom != "")
                    echo "●　" . $instructionText_Bedroom . "<br>";
                if ($instructionText_Livingroom != "")
                    echo "●　" . $instructionText_Livingroom . "<br>";
                if ($instructionText_Toilet != "")
                    echo "●　" . $instructionText_Toilet;
            ?>
        </div>
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
            echo '<span class="Livingroom_fire"><img src = "picture/red.png" width="50" height="50" ></span>';

        if ($Livingroom_smoke == 0)
            echo '<span class="Livingroom_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Livingroom_smoke"><img src = "picture/orange.png" width="50" height="50" ></span>';

        if ($Livingroom_body == 0)
            echo '<span class="Livingroom_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Livingroom_body"><img src = "picture/green.png" width="50" height="50" ></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
            
        if ($Gate_smoke == 0)
            echo '<span class="Gate_smoke"><img src = "picture/orangeCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Gate_smoke"><img src = "picture/orange.png" width="50" height="50" ></span>';

        if ($Toilet_CO == 0)
            echo '<span class="Toilet_CO"><img src = "picture/blueCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Toilet_CO"><img src = "picture/blue.png" width="50" height="50" ></span>';

        if ($Toilet_body == 0)
            echo '<span class="Toilet_body"><img src = "picture/greenCircle.png" width="50" height="50" ></span>';
        else
            echo '<span class="Toilet_body"><img src = "picture/green.png" width="50" height="50" ></span>';

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        if ($arrow_KitchenToGate == 1)
            echo '<span class="KitchenToGateArrow"><img src = "picture/KitchenToGate.png" width="47.5" /></span>';

        if ($arrow_RoomToGate == 1)
            echo '<span class="RoomToGateArrow"><img src = "picture/RoomToGate.png" width="97.5" /></span>';

        if ($arrow_RoomToBalcony == 1)
            echo '<span class="RoomToBalconyArrow"><img src = "picture/RoomToBalcony.png" width="200" /></span>';

        if ($arrow_LivingToGate == 1)
            echo '<span class="LivingToGateArrow"><img src = "picture/LivingToGate.png" width="255" /></span>';
        
        if ($arrow_ToiletToGate == 1)
            echo '<span class="ToiletToGateArrow"><img src = "picture/ToiletToGate.png" width="130"/></span>';

        if ($arrow_Gate == 1)
            echo '<span class="GateArrow"><img src = "picture/Gate.png" width="350" /></span>';
        ?>
    
      
        <img src="picture/floorPlan.jpg" width="1000" height="730" style="float:left;margin:0px 100px 0px 100px" alt="">
    </div>
    
    <div class="light"> 
        <a>燈號說明</a>  
        <img src="picture/light.png" width="500" height="500">
    </div>
</body>