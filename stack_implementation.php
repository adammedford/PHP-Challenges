<?

function push($arr, $value) {
  array_push($arr, $value);
  return $arr;
}

function pop($arr) {
  array_pop($arr);
  return $arr;
}

   
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $heap = array(); 
  $phrase = "";
  $test = trim(fgets($myFile));
  if ($test != "") {
    $arr = explode(" ", $test);
    for ($i = 0; $i < count($arr); $i++) {
       $heap = push($heap, $arr[$i]);
    }
    $ct = count($heap);
    while ($ct > 0) {
       $phrase .= $heap[count($heap)-1] . " ";
       $heap = pop($heap);
       $heap = pop($heap);
       $ct = $ct - 2;
    }
    echo trim($phrase) . "\n";
  }
  
}
fclose($myFile);
?>
