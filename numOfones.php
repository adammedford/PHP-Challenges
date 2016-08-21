<?php

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = fgets($myFile);
  $bin = decbin($test);
  echo substr_count($bin,"1") . "\n";
}
fclose($myFile);
?>
