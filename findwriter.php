<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $test = fgets($myFile);
    $arr = explode("|", $test);
    $strarr = str_split($arr[0]);
    $nums = explode(' ', trim($arr[1]));
    $ret = '';
    foreach($nums as $value){
        $ret .= $strarr[intval($value)-1];
    }
    echo $ret . "\n";
}

?>
