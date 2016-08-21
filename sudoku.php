<?
function createBoard($ct, $puzzle) {
   $board = array();
   $row = 0;
   $col = 0;
   $puzzle = explode(",", $puzzle);
   for ($i = 0; $i < count($puzzle); $i++) {
      $board[$row][$col] = $puzzle[$i];
      $col++;
      if (($i+1)%$ct == 0) {
         $row++;
         $col = 0;
      }
   }
   return $board;
}  

function validBoard($ct, $board) {
// check cols
   for ($i = 0; $i < $ct; $i++) {
     $values = implode("", range(1, $ct));
     for ($j = 0; $j < $ct; $j++) {
       $values = str_replace($board[$i][$j],"",$values); 
     }

     if (trim($values) != "") {
       return "False";
     }
   }

// check rows
   for ($i = 0; $i < $ct; $i++) {
     $values = implode("", range(1, $ct));
     for ($j = 0; $j < $ct; $j++) {
       $values = str_replace($board[$j][$i],"",$values);
     }

     if (trim($values) != "") {
       return "False";
     }
   }

   return "True";
}

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  if ($test != "") {
    $args = explode(";", $test);
    $board = createBoard($args[0], $args[1]);
    echo validBoard($args[0], $board) . "\n";
  }
}
fclose($myFile);
?>
