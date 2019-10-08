<?php
// 创建数组
$arr = array(1, 45, 32, 23, 6 , 35, 10 );
$len = count($arr);


for ($i=0; $i < $len-1; $i++) { 
    // 设置当前最小数
    $minindex = $i;
    // 设置指针j,j总是从当前最小数i后一位开始,到[$len-1]位置结束.
    for ($j=$i+1; $j < $len; $j++) { 
        // 将arr[j]与当前最小数对比,如果minindex>j,则j数保存在minindex中,j继续运行
        if ($arr[$j] < $arr[$minindex]) {
            $minindex = $j;
        }
        
    }
    // 已知$arr[$j] < $arr[$minindex] 且第二个循环最开始$minindex = $i所以可以直接进行替换→
    // →不用判断$minindex处的数是否发生了变化.
    $temp = $arr[$i];
    $arr[$i] = $arr[$minindex];
    $arr[$minindex] = $temp;

    // $temp = $arr[$i];
    // $arr[$i] = $arr[$minindex];
    // $arr[$minindex] = $temp;
}

var_dump($arr)
?>