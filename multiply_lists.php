<?php

function multi($var){
    $arr = explode('|',$var);
    $a = explode(' ',trim($arr[0]));
    $b = explode(' ',trim($arr[1]));
    foreach($a as $key=>$value){
        $ret[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$ret);
}

$myFile = fopen($argv[1], "r");

while (!feof($myFile)) {
    $test = fgets($myFile);
    echo  multi($test). "\n";
}

?>
