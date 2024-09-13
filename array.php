<?php
function arr($a){
$n = count($a) - 3;
    if($n<3){
        return false;
    }
    for($i=0;$i<=$n;$i++){
        if($a[$i] == $a[$i+1] - 1 && $a[$i] == $a[$i+2] - 2 ) {
            return true;
        }
    }
    return false;

}
$a =  [7, 5, 4, 1, 2, 13];
var_dump(arr($a))
?>
