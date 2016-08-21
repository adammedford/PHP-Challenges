<?php
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $test = trim(fgets($myFile));
      $word_array = str_word_count($test, 1);
      $new_word = "";
        for ($i=count($word_array)-1; $i>0-1; $i--) {
                $new_word .= $word_array[$i] . " ";
                  }
        echo trim($new_word) . "\n";
}
fclose($myFile);
?>
