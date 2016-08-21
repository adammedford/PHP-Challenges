<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $test = fgets($myFile);
      echo strtolower($test);
}
fclose($myFile);
?>
