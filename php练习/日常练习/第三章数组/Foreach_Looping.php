<?php
$arr = array(2=>'管理员01' ,'测试'=>'数组', 7=>'激活', );
var_dump($arr);echo "<br/>";
foreach($arr as $current){
    echo "$current"."<br/>";
}

while(list($name, $value) = each($arr)){
    echo "$name:$value<br/>";
}

?>