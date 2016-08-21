

<?php
/*
Having a string representation of a set of numbers you need to print this numbers.
All numbers are separated by semicolon. There are up to 20 numbers in one line. The numbers are "zero" to "nine"
*/

$myFile = fopen($argv[1], "r");
while (!feof($myFile)) {
    $arr = explode(';',fgets($myFile));
    $output = '';
    foreach($arr as $value){
        switch(trim($value)){
            case 'zero':
                $output .= '0';
                break;
            case 'one':
                $output .= '1';
                break;
            case 'two':
                $output .= '2';
                break;
            case 'three':
                $output .= '3';
                break;
            case 'four':
                $output .= '4';
                break;
            case 'five':
                $output .= '5';
                break;
            case 'six':
                $output .= '6';
                break;
            case 'seven':
                $output .= '7';
                break;
            case 'eight':
                $output .= '8';
                break;
            case 'nine':
                $output .= '9';
                break;    
        }
    }
    echo $output . "\n";
}
?>