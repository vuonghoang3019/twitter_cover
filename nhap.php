<?php
function diagonalDifference($arr) {
    // Write your code here
$length = count($arr);
$primaryDiagonal = 0;
$secondaryDiagonal = 0;
$last = $length - 1;
for ($i = 0;$i<$length;$i++)
{
    $primaryDiagonal+=$arr[$i][$i];
    $secondaryDiagonal+=$arr[$i][$last--];
}
 return abs($primaryDiagonal - $secondaryDiagonal);
}
?>
<?php 
function plusMinus($arr) {
    $POSITIVES = 0;
    $NEGATIVES = 1;
    $ZEROES = 2;

    $length = count($arr);
    // declare the temp numbers to index positions
    $numbers = [0, 0, 0];

    // determine the plusMinus of the numbers
    foreach($arr as $val){
        if($val === 0){
            $numbers[$ZEROES] = $numbers[$ZEROES] + 1;
            continue;
        }
        if($val > 0){
            $numbers[$POSITIVES] = $numbers[$POSITIVES] + 1;
            continue;
        }
        $numbers[$NEGATIVES] = $numbers[$NEGATIVES] + 1;
    }

    $plusMinusArr = array_map(function ($number) use ($length) {
        return number_format($number/$length, 6);
    }, $numbers);

    foreach($plusMinusArr as $plusMinus){
        echo $plusMinus;
        echo "\n";
    }
}
?>
<?php 

  
?>