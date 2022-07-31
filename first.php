<?php

function addFunction(array $arr){
        //array key 2 ,5,8
//         $a =0;
//     foreach($arr as $key=>$i){
//     if($key == 2 ){
//         $a+=$i;
//     }
//     if($key == 5){
// $a+=$i;  
//     }
// if($key == 8){
//      $a+=$i; 
// }

    
    
    // }
// return $a;
    $sum = 0;
    $total = 0;
    foreach($arr as $key=> $item){
        // if(in_array($key, [2,5,8])){
        //     $sum += $item;
        // }
        $sum = sum($key, [2,5,8], $item, $sum);
    }

    foreach($arr as $key=> $item){
     
        $total = sum($key, [1,3,5], $item, $total);
    }






    return $sum+$total;

};

function sum(int $key, array $numbers, int $item, int $sum = 0){
    if(in_array($key, $numbers)){
        $sum += $item;
    }
    return $sum;
}

echo addFunction([
    0=>1,
    1=>1,
    2=>4,
    3=>1,
    4=>1,
    5=>6,
    6=>1,
    7=>1,
    8=>10
    
    
    ])
?>