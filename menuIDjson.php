<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $test = fgets($myFile);
    $arr = json_decode($test);
    $a = 0;
    $turns = 0;
    if(!empty($arr->menu->items)):
        foreach($arr->menu->items as $value){
            if(!empty($value->label)){
                $a += $value->id;
            }
            $turns++;
            if($turns == 10){
                break;
            }
        }
    echo $a . "\n";
    endif;
   
}

?>
