<?php
$a=4;
function add()
{
    $a=20;
    echo"This is a local variable ".$a;
}
add();
echo"<br>"
echo"this is a global variable".$a;
?>