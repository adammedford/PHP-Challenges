<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = fgets($myFile);
  $nums = explode(",",$test);
  $divides=(int)($nums[0]/$nums[1]);
  echo $nums[0]-$nums[1]*$divides . "\n";
}
fclose($myFile);
?>
