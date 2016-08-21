<?php

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if (filter_var($test, FILTER_VALIDATE_EMAIL)) {
    echo "true" . "\n";
  } else {
    echo "false" . "\n";
  }
}
fclose($myFile);
?>
