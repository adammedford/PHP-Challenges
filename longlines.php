<?php
function sort_length($a,$b) {
  return strlen($b) - strlen($a);
}

$phrase_list = array();
$myFile = fopen($argv[1], "r");

while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    array_push($phrase_list,$test);
  }
}

usort($phrase_list,'sort_length');
foreach($phrase_list as $phrase) {
  echo $phrase . "\n";
}
fclose($myFile);
?>
