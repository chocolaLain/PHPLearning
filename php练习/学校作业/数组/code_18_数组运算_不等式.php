<?php
function f1(){
    $a = array('1' => 'No1', '2' => 'No2', '3' => 'No3', '4' => 'No4');
    $b = array('3' => 'No3', '4' => 'No4', '5' => 'No5', '6' => 'No6');
    $c = $a + $b;
    print_r($c);
    echo '<br/>';
    echo '==运算符:';
    if ($a == $b) {
        echo '等价<br/>';
    } else {
        echo '不等价<br/>';
    }

    echo '!=运算符:';
    if ($a != $b) {
        echo '不等价<br/>';
    } else {
        echo '等价<br/>';
    }

    echo '<>运算符:';
    if ($a <> $b) {
        echo '不等于<br/>';
    } else {
        echo '等于<br/>';
    }
}

f1();

?>