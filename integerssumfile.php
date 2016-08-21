<?php

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $nums = fgets($myFile);
  $sum += $nums;
}
echo $sum;
fclose($myFile);
?>
