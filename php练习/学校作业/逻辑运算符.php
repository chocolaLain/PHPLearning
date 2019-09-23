<?php
    // 逻辑与
    $n1 = 10;
    $n2 = 0;

    var_dump($n1 && $n2).'<br/>';
    

    $con1 = 10>20;
    $con2 = 'abcdefg';
    var_dump($con1 && $con2);

    // 逻辑或
    $re = (10>20) || ($n3 = 100);
    var_dump($n3);

    echo "<br/>";
    // switch语句
    $strData = 2;
    switch ($strData) {
        case '1':
            echo '打代码<br/>';
            break;
        
        case '2':
            echo '领工资<br/>';
            break;
        
        case '3':
            echo '带着电脑去自习<br/>';
            break;
        case '4':
            echo '背古文<br/>';
            break;

        default:
            echo '中100w<br/>';
            break;
    }
    // if成绩表,100~90是优秀,90~60是良好,60~20是不及格,20~0是非常差.
    $grades = 59;
    echo "XX的成绩是:".$grades. "(100~90是优秀,90~60是良好,60~20是不及格,20~0是非常差.)<br/>";
    if ($grades>=90 && $grades <=100)
        echo "成绩优秀<br/>";
    elseif ($grades >=60 && $grades <90)
        echo "成绩良好<br/>";
    elseif ($grades >=20 && $grades <60) 
        echo "不及格<br/>";
    elseif ($grades >=0 && $grades <20)
        echo "非常差<br/>";
    else
        echo "数值错误<br/>";
    
    
?>