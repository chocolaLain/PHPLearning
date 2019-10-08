<?php
// 创建数组
$arr = array(1, 2,3,4,4.5,6,);
$len = count($arr);


for ($i=0; $i < $len-1; $i++) { 
    // 设置当前最小数
    $mindata = $arr[$i];
    $j_2 = null;
    // 设置指针j,j总是从当前最小数i后一位开始,到[$len-1]位置结束.
    for ($j=$i+1; $j < $len; $j++) { 
        // 将arr[j]与当前最小数对比,如果mindata>j,则j数保存在mindata中,j继续运行
        if ($arr[$j] < $mindata) {
            $mindata = $arr[$j];

            // 将目前最小值的位置保存下来
            $j_2 = $j;
        }
        
    }
    // 如果$mindata发生了变化,则进行最小数的替换
    // 如果不验证$mindata是否发生变化,就会导致如果$mindata没有发生变化→
    // →最开始设置的$j_2处的数值(这个位置最开始是随便设置的)被设置为$i处的数值,产生误差.→
    // →如果$j_2设置为null

    $temp = $arr[$i];
    $arr[$i] = $mindata;
    $arr[$j_2] = $temp;

}

var_dump($arr)
?>