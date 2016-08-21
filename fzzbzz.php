

<?php
/*
Players generally sit in a circle. The first player says the number “1”, and each player says next number in turn. 
However, any number divisible by X (for example, three) is replaced by the word fizz, and any divisible by Y (for example, five) by the word buzz. 
Numbers divisible by both become fizz buzz. A player who hesitates, or makes a mistake is eliminated from the game.

Write a program that prints out the final series of numbers where those divisible by X, Y and both are replaced by “F” for fizz, “B” for buzz and “FB” for fizz buzz.


Your program should accept a file as its first argument. The file contains multiple separated lines; each line contains 3 numbers that are space delimited. 
The first number is the first divider (X), the second number is the second divider (Y), and the third number is how far you should count (N). 
You may assume that the input file is formatted correctly and the numbers are valid positive integers.

Print out the series 1 through N replacing numbers divisible by X with “F”, numbers divisible by Y with “B” and numbers divisible by both with “FB”. 
Since the input file contains multiple sets of values, your output should print out one line per set. 
Ensure that there are no trailing empty spaces in each line you print.
*/

function fizz_buzz($num, $fizz, $buzz) {
  if ($num%$fizz==0 && $num%$buzz==0) {
    return "FB";
  } elseif ($num%$fizz==0) {
    return "F";
  } elseif ($num%$buzz==0) {
    return "B";
  } else {
    return $num;
  }
}
$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
  $test = trim(fgets($myFile));
  $game_result="";
  $game_set = explode(" ", $test);
  for ($i=1; $i<$game_set[count($game_set)-1]+1; $i++) {
    $game_result .= fizz_buzz($i, $game_set[0], $game_set[1]) . " ";
  }
  echo trim($game_result) . "\n";
}
fclose($myFile);
?>