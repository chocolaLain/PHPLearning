<?php
    $a = 4;
    $b = 4;
    // Pre-increment decrement operator
    echo "a:".++$a."<br/>"."b(bf):".$b++."<br/>"."b(ar):".$b;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    // Reference operator
    $aa = 4;
    $bb = $aa;
    $aa = 5;
    echo $aa.$bb;
    echo "<br/>";

    $aa = 4;
    $bb = &$aa;
    $aa = 5;
    echo $aa.$bb;
    echo "<br/>";
?>

<?php
    $a = 0;
    while ($a <= 10) {
        echo $a++."<br/>"; 


    }
?>

<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
        
    }
?>

<?php
    echo "<br/>";
    for ($i=2; $i <= 100; $i+=2) { 
        $sum += $i;
        echo 'sum:'.$sum;
    }
?>