<?php
function armstrong_number($num) {
  $power = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $power; $i++) {
    $sum = $sum + pow((string)$num{$i},$power);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = fgets($myFile);
  echo armstrong_number(trim($test)) . "\n";
}
fclose($myFile);
?>
