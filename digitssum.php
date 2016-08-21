<?php
function sum_of_digits($nums) {
    $sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $sum += $nums[$i];
               }
      return $sum;
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $nums = fgets($myFile);
      echo sum_of_digits($nums) . "\n";
}
fclose($myFile);
?>
