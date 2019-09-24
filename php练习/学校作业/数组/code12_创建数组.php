<?php
$arr = array('Tires', 'oil','Spark Plugs');
var_dump($arr); echo '<hr/>';
$numbers = range(1,10);
var_dump($numbers); echo '<hr/>';

for ($i=0; $i < 5; $i++) { 
    echo $numbers[$i]." ";
}
echo '<hr/>';

// foreach语句
foreach ($arr as $key => $value) {
    echo "$key-$value<br/>";
}


?>