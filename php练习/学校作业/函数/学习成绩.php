<?php
function Academic_Record($record){
    // 学习成绩分为ABCDE五个等级 ,
    if ($record <= 100 && $record >90) {
        // 学习成绩为A等级
        return 'A';
    } elseif ($record <=90 && $record >80) {
        // 学习成绩为B等级
        return 'B';
    } elseif ($record <= 80 && $record > 70) {
        // 学习成绩为C等级
        return 'C';
    } elseif ($record <= 70 && $record > 60) {
        // 学习成绩为C等级
        return 'C';
    } elseif ($record <= 60 && $record > 40) {
        // 学习成绩为D等级
        return 'D';
    } elseif ($record <= 40 && $record > 0) {
        // 学习成绩为E等级
        return 'E';
    }
}

$AcRecord = 64;
echo Academic_Record($AcRecord);

?>