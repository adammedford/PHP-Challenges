<?php
function sort_length($a,$b) {
  return strlen($b) - strlen($a);
}

$phrase_list = array();
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    $parse_data = explode(";",$test);
    $num_data = explode(",",$parse_data[1]);
    $counts = array_count_values($num_data);
    for ($i = 0; $i < count($counts); $i++) {
      if ($counts[$i] > 1) {
         print $i . "\n";
      }
    }
  }
}
fclose($myFile);
?>
