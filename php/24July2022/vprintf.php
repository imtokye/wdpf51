<?php
    $players =array();
    $players[] =array("Tamim", "Sakib", "Rahim");
    $players[] =array("Sangakara", "Dilshan", "Mahela");
    $players[] =array("Maxwell", "Werner", "Smith");

    echo "<pre>";
    print_r($players);

    foreach($players as $player){

    // vprintf("Player1: %s Player2: %s Player3: %s <br>",$players);
    foreach($player as $pl){
        echo $pl . "&nbsp";
    }
    echo "<br>";
}
?>