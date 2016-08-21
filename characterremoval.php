<?

function removeChars($word, $remove) {
   $new_word = $word;
   for ($i = 0; $i <= strlen($remove); $i++) {
      $new_word = str_replace(substr($remove,$i,1), "", $new_word);
   }
   return $new_word;
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    $args = explode(", ", $test);
    echo removeChars($args[0], $args[1]) . "\n";
  }
}
fclose($myFile);
?>
