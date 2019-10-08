<?php

// 定义一个选择排序的函数
function select_sort($arr){
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        // 设置当前最小数
        $maxdata = $arr[$i];
        $j_2 = 0;
        // 设置指针j,j总是从当前最小数i后一位开始,到[$len-1]位置结束.
        for ($j = $i + 1; $j < $len; $j++) {
            // 将arr[j]与当前最小数对比,如果maxdata>j,则j数保存在maxdata中,j继续运行
            if ($arr[$j] > $maxdata) {
                $maxdata = $arr[$j];

                // 将目前最小值的位置保存下来
                $j_2 = $j;
            }
        }
        // 如果$maxdata发生了变化,则进行最小数的替换
        // 如果不验证$maxdata是否发生变化,就会导致如果$maxdata没有发生变化→
        // →最开始设置的$j_2处的数值(这个位置最开始是随便设置的)被设置为$i处的数值,产生误差.→
        if ($arr[$i] != $maxdata) {
            $temp = $arr[$i];
            $arr[$i] = $maxdata;
            $arr[$j_2] = $temp;
        }
    }
    return $arr;
}

// 打印数组
function print_arr($arr){
    echo "<br/>数组:";
    foreach ($arr as $key => $value) {
        echo $value." ";
    }
}

// 调用该函数
$arr01 = array(20, 30, 50 , 18, 12, 40);
$fin_arr = select_sort($arr01);
var_dump($fin_arr);

print_arr($fin_arr);


?>