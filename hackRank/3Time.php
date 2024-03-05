<?php 

function timeConversion($s) {
    $format = substr($s, -2);

    $minutesAndSeconds = substr($s,2);
    $minutesAndSeconds = substr($minutesAndSeconds,0,-2);
    $hour = substr($s,0,2);
    $time = "";
    
    if($format == 'AM'){
        
        if($hour == 12){
            $hour = '00';
        }
        $time = $hour . $minutesAndSeconds;
        
    }else{
        if($hour == 12){
            $time = $hour . $minutesAndSeconds;
        }else{
            $time = $hour + 12 . $minutesAndSeconds;
        }
        
    }
    
    return $time;

}