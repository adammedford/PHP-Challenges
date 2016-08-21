<?

function largestSum($arr) {
   $largest_sum = 0;
   $sum = 0;
   for ($i = 0; $i <= count($arr); $i++) {
     $sum = 0;
     for ($j = $i; $j <= count($arr); $j++) {
        $sum += (int)$arr[$j];
        if ($sum > $largest_sum) {
         $largest_sum = $sum;
        }
      }
   }
   return $largest_sum;
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    $args = explode(",", $test);
    echo largestSum($args) . "\n";
  }
}
fclose($myFile);
?>
