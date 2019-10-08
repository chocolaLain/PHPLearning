<?php
$data01 = array(1, 4, 5, 5 ,22 ,34);
function create_able2($data, $border = 1, $cellpadding = 4, $cellspacing = 4){
    echo "<table border=\"".$border."\"cellpadding=\"".$cellpadding."\"
    cellspacing=\"".$cellspacing."\">";

    reset($data);

    $value = current($data);

    while ($value) {
        echo "<tr><td".$value."</td></tr>\n";
        $value = next($data);
    }
}

create_able2($data01);
?>