<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $test = fgets($myFile);
    echo ucwords($test) . "\n";
}
?>
