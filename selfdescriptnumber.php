<?php
function self_describing($num) {
  for ($i = 0; $i < strlen($num); $i++) {
    if ($num{$i} != substr_count($num,$i)) {
      return 0;
    }
  }
  return 1;
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = fgets($myFile);
  echo self_describing($test) . "\n";
}
fclose($myFile);
?>
