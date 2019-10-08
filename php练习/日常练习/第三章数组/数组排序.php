<?php
$products=array('数组', 'jojo', '星际牛仔',);
var_dump($products);

echo "<br/>";

sort($products);
var_dump($products);

echo "<br/>";

$prices = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);
asort($prices);
var_dump($prices);
?>