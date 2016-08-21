<?php
function fibonacci($num) {
  $a = $num - 1;
  $b = $num - 2;
  if ($num >= 2) {
    return fibonacci($a) + fibonacci($b);
  } elseif ($num == 1) {
    return 1;
  } else {
    return 0;
  }
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $num = fgets($myFile);
  echo fibonacci($num) . "\n";
}
fclose($myFile);
?>
