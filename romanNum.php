<?php
$romanNumber = 'XXXIV';
$res = 0;
$x = 0;
for($i = 0; $i < strlen($romanNumber); $i++){
    $elem = $romanNumber[$i];

    if($elem == "I"){
        $res += 1;
    }
    if($elem == "V"){
        if($res > 0){
            $res = 5 - $res;
        }else{
            $res += 5;
        }
    }

    if($elem == "X"){
        if($res > 0){
            $res = 10 - $res;
        }else{
            $x += 1;
        }
    }
}
$res = $res + $x * 10;
echo "$res";
?>