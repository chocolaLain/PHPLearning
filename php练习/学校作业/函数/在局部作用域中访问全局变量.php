<?php
$a = 1;
$b = 2;
function local_fun_01(){
    global $a;
    echo $a;
}
function local_fun_02()
{
    echo $GLOBALS['b'];
}
local_fun_01();
echo '<br/>';
local_fun_02();
?>