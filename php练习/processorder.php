<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto parts-order results</title>
    
</head>
<body>
    <?php
        //create short variable names
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        

        echo '<p>Your order is as follows:</p>';
        echo $tireqty.'tires<br/>';
        echo $oilqty.'bottles of oil <br/>';
        echo $sparkqty.'spark plugs<br/>';
        
        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Items ordered:".$totalqty."<br/>";

        $totalamount = 0.00;
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        $totalamount = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
        echo "Subtotal;$".number_format($totalamount,2)."<br/>";
        $taxrate = 0.10; //lcoal sales tax is 10%
        
        $totalamount = $totalamount*(1 + $taxrate);

        echo "Total including tax:$".number_format($totalamount, 2)."<br/>";
    ?>
    <h1>bob's auto parts</h1>
    <h2>order rusults</h2>
    <h1>
        <?php 
            echo '<p>Order processed.'; 
            echo date('H:i,js F Y');
            echo "</p>";
        ?>
    </h1>

    <!-- <?php
        echo rand(0, 10);
    ?> -->
    
    <!-- <?php
        echo "<p> Let's new a span:".date('H:i,js F Y')."</p>";
    ?> -->
    
    <!-- <?php
        $varname = 'tireqty';
        $$varname = 5;

        echo '<p>Your order is as follows:</p>';
        echo $tireqty.'tires<br/>';
        echo $oilqty.'bottles of oil <br/>';
        echo $sparkqty.'spark plugs<br/>';
 
         // 可变变量
         $jojo = 'kono';
         $$jojo = 'woz?';
         echo "$jojo $kono"."<br />";

         //变量传值
         $lain = 'net';
         $alice = $lain;
         echo $alice."<br />";
         // 算数运算符的应用
         $a = 20;
         $b = 20;
         echo !($a != $b);
         // 赋值运算符的应用
         echo $a + $b."<br />";

    ?> -->


    <!-- <?php
        $a = true;
        if(!!$a){
            echo 'ok';
        }else {
            echo 'error';
        }
    ?> -->

</body>
</html>