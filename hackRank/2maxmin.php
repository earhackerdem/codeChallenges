<?php
          //Refactor
function miniMaxSum($arr)
{
    $lower = 0;
    $bigger = 0;
    $minValues = $arr + [];
    $maxValues = $arr + [];
    $minSum = 0;
    $maxSum = 0;
    foreach ($arr as $key => $number) {
        if ($number > $bigger) {
            $bigger = $key;
        }

        if ($number < $lower) {
            $lower = $key;
        }
    }


    unset($minValues[$bigger]);
    unset($maxValues[$lower]);

    foreach ($minValues as $number) {
        $minSum += $number;
    }

    foreach ($maxValues as $number) {
        $maxSum += $number;
    }

    print($minSum . " " . $maxSum);
}
function miniMaxSumm($arr){
    $maxValues = $arr;
    $minValues = $arr;
    sort($maxValues);
    rsort($minValues);
    unset($maxValues[0]);
    unset($minValues[0]);
    
    $maxSum = 0;
    $minSum = 0;
    
    foreach($minValues as $number){
        $minSum += $number;
    }
    
    foreach($maxValues as $number){
        $maxSum += $number;
    }
    
    print($minSum . " " . $maxSum);
}