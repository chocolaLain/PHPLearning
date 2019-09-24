<?php
$arr = array();
$arr['name'] = '鲁智深';
$arr[10] = '花和尚';

var_dump($arr); echo '<br/>';
unset($arr['name']);
var_dump($arr); echo '<br/>';
?>