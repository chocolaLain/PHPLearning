<?php
$products = array(
    array('TIR', 'Tires', '100'),
    array('OTL', 'oil', '10'),
    array('BRE', 'spark Flugs', 4));

$products02 = array(
    array('Code' => 'TIR', 'Description' => 'Tires', 'Price' => '100'),
    array('Code' => 'OTL', 'Description' => 'oil', 'Price' => '10'),
    array('Code' => 'BRE', 'Description' => 'spark Flugs', 'Price' => 4)
);

// products循环遍历
// for($row = 0; $row < 3; $row++){
//     for($column = 0; $column < 3; $column++){
//         echo '|'.$products[$row][$column];
//     }
//     echo '|<br/>';
// }

for($row = 0; $row < 3; $row++){
    echo '|'.$products02
}


?>