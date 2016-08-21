<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  $arr = explode(" ", $test);
  $arr = array_reverse($arr);
  if ($arr[0] <= count($arr)) {
    echo $arr[$arr[0]]  . "\n";
  }
}
fclose($myFile);
?>
