<?php

$leeftijd = 18;

?>
<html>
<head>
</head>
<body>

    <div id="isMeerderJarig">
        <?php
        
        if($leeftijd < 18){
            echo "HAhaHA je bent te jong. TOEGANG GEWEIGERD.";
        }
        else{
            echo "Acces granted";
        }

        ?>
    </div>

</body>
</html>