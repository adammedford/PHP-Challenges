<?php

function sum_palindrome($num, $ct) {
  if ($ct > 1000) {
    return;
  }

  $new_sum = $num + (int)strrev($num);
  if ($new_sum == (int)strrev($new_sum)) {
    return "$ct $new_sum";
  }

  $ct++;
  return sum_palindrome($new_sum, $ct);
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    echo sum_palindrome($test, 1) . "\n";
  }
}
fclose($myFile);
?>
