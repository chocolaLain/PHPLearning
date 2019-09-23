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
        $find = $_POST['find'];


        // 打印商品总数
        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Items ordered(商品总数):".$totalqty. "<br/><br/>";

        // 显示用户来源
        switch ($find) {
            case "a":
                echo "<p>Regular customer(常规用户)</p>";
                echo "<br/>";
                break;
            
            case "b":
                echo "<p>Customer referred by TV advert(电视广告用户)</p>";
                echo "<br/>";
                break;
            
            case "c":
                echo "<p>Customer refered by phone directory(联系人用户)</p>";
                echo "<br/>";
                break;

            case "d":
                echo "<p>Customer refered by word of mouth.(他人推荐)</p>";
                echo "<br/>";
                break;
            default:
                echo "<p>We do not konw how this customer found us(未知)</p>";
                echo "<br/>";
                break;
        }
        
        
        // 检测是否购买商品,如果没有购买就警示
        if ($totalqty == 0) {
            echo '<p style = "color:red">';
            echo 'You did not order anything on the previous page!(你没有输入任何数据)';
            echo '</p>';

        }else{
            // 打印每个商品的数量
            echo '<p>Your order is as follows(你的订单如下):</p>';
            if ($tireqty > 0)
                echo $tireqty.'tires(轮胎<br/>';
            if ($oilqty > 0)
                echo $oilqty.'bottles of oil(汽油) <br/>';
            if ($sparkqty > 0)
                echo $sparkqty.'spark plugs(火花塞)<br/>';
        }
        
        // 打印商品总税收
        $totalamount = 0.00;
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        $totalamount = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
        echo "Subtotal;$".number_format($totalamount,2)."<br/>";
        $taxrate = 0.10; //lcoal sales tax is 10%
        
        $totalamount = $totalamount*(1 + $taxrate);

        echo "Total including tax:$".number_format($totalamount, 2)."<br/>";
        
        // 测试变量状态
        echo 'isset($tireqty):'.isset($tireqty).'<br/>';
        echo 'isset($nothere):'.isset($nothere).'<br/>';
        echo 'empty($tireqty):'.empty($tireqty).'<br/>';
        echo 'empty($nothere):'.empty($nothere).'<br/>';
        ?>

        <!-- 打印标题 -->
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
        // 打印一个随机数
        echo rand(0, 10);
        // 打印一段日期
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