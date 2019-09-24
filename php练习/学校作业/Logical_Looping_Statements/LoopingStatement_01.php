<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 运费单 -->
    <table border="0" cellpadding="3">
        <tr>
            <td bgcolor="#CCCCCC" align="center">Distance</td>
            <td bgcolor="#CCCCCC" align="center">Cost</td>
        </tr>
        <!-- 利用while循环来生成表单 -->
        <!-- <?php
            $distance = 50;
            while ($distance <= 250) {
                echo "<tr>
                        <td align=\"right\">".$distance."</td>
                        <td align=\"right\">".($distance/10)."</td>
                      </tr>\n";
            $distance += 50;
            }
        ?> -->

        <!-- 利用for循环来生成表单 -->
        <?php
            for ($distance=50; $distance <= 250; $distance+=50) { 
                echo    "<tr>
                            <td align=\"right\">".$distance."</td>
                            <td align=\"right\">".($distance/10)."</td>
                        </tr>\n";
            }
        ?>
    </table>
</body>
</html>