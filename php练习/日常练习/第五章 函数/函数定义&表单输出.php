<?php
function create_able2($data, $border = 1, $cellpadding = 4, $cellspacing = 4){
    echo "<table border=\"".$border."\"cellpadding=\"".$cellpadding."\"
    cellspacing=\"".$cellspacing."\">";

    reset($data);
    $value = current($data);
    while ($value) {
        echo "<tr><td>".$value."</td></tr>\n";
        $value = next($data);
    }
    echo "</table>";
}
$data01 = array('line one', 'Line two', 'line three');
create_able2($data01, 3, 8, 12);
?>