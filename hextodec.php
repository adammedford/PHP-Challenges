<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = fgets($myFile);
  echo hexdec($test) . "\n";
}
fclose($myFile);
?>
