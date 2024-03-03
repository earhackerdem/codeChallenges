<?php

function plusMinus($arr) {
    $size = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    foreach($arr as $number){
        if($number == 0){
            $zero++;
        }elseif($number > 0){
            $positive++;
        }else{
            $negative++;
        }
    }
    
    print ( number_format($positive/$size, 6, '.', '') . PHP_EOL);
    print ( number_format($negative/$size, 6, '.', '' ). PHP_EOL );
    print ( number_format($zero/$size ?? 0, 6, '.', '' ). PHP_EOL );

}

