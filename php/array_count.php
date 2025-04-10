<?php
$arr = [ 1,2,3,4,5,1,1,2,1];
$newArr = [];
foreach($arr as $val){
    if(in_array($val, $newArr))
    {
        $newArr[$val]++;
    }else{
        $newArr[$val] = 1;
    }
}




// foreach ($arr as $val) {
//     if (in_array($val,$newArr)) {
//       $newArr[$val]++;
//     } else {
//       $newArr[$val] = 1;
//     }
// }

print_r($newArr);