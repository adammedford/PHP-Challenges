<?php


function sub_str($word, $search) {
    $search_ct = 0;
    $wild_ct = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] == $search[$search_ct] || $search[$search_ct] == "*") {
           //print "SUCCESS: " . $word[$i] . "==" . $search[$search_ct] . "\n";
           if ($search[$search_ct] != "*") {
             $search_ct++;
           }
           if ($search[$search_ct] == "*" && $wild_ct == 0) {
             $wild_ct++;  
           }
           if ($wild_ct >= 1 && $search[$search_ct+1] == $word[$i+1]) {
             $search_ct++;
           }
        } 
    }

    if ($wild_ct > 0) {
      $search_ct -= $wild_ct;
    }    
    if ($search_ct == strlen($search)) {
        return "true";
    } else {
        return "false";
    }
}


$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    $args = explode("," , $test);
    echo sub_str($args[0],$args[1]) . "\n";
  }
}

fclose($myFile);

?>
