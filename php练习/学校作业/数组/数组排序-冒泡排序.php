<?php
$arr_01 = array(20, 40, 50 , 15, 60, 79, 31, 14 );

echo "该数组为:";
while (1) {
    echo current($arr_01);
    echo " ";
    if (!next($arr_01)) {
        break;
    }
}

echo '<br/>';

// 从0开始遍历 
for ($i=0; $i < count($arr_01) ; $i++) { 
    // 从i+1开始遍历
    for ($j=$i+1; $j < count($arr_01); $j++) { 
        if ($arr_01[$i] < $arr_01[$j]) {
            $Tem = $arr_01[$i]; //暂时存储较小的量.
            $arr_01[$i] = $arr_01[$j]; //将较大的量放在前面.
            $arr_01[$j] = $Tem; //将较小的量放在后面.

        }
    }
}
echo '<br>';
var_dump($arr_01);
echo "处理后的该数组为:";
reset($arr_01);
while (1) {
    echo current($arr_01);
    echo " ";
    if (!next($arr_01)) {
        break;
    }
}
?>