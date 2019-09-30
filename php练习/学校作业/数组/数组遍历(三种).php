<?php
// 生成数组
$arr_01 = array('月之美兔' => '9月24日', '安洁' => '9月30日', '鹰宫' => '1月7日');
$arr_02 = array('舞元' => '11月9日', '莉泽' => '5月25日', '江哥' => '7月28日');
$arr_03 = array('叶' => '7月7日', '海牛' => '4月15日', '美大生' => '6月24日');

echo "部分彩虹社Vtuber的生日<hr/>";

echo '<strong>foreach循环:<br/></strong>';
foreach ($arr_01 as $birthday => $Vtuber_Name) {
    echo $birthday.'-'.$Vtuber_Name.'<br/>';
}

echo '<hr/>';

echo '<strong>while each循环:</strong>';
while (list($birthday, $Vtuber_Name) = each($arr_02)) {
    echo "$birthday-$Vtuber_Name<br/>";
}

echo '<hr/>';

echo '<strong>数组指针:<br/></strong>';
while (1) {
    echo key($arr_03);
    echo "-";
    echo current($arr_03);
    echo "<br/>";
    if (!next($arr_03)) {
        break;
    }   
}
?>