<?php
echo 'This is the main file.<br/>';
// 测试require和include函数
require('reusable_Require_function.php');
include('reusable_Include_function.php');

// 测试require_once函数
require_once('reusable_Require_function.php');
require_once('reusable_RequireOnce_function.php');
require_once('reusable_RequireOnce_function.php');
echo 'The script will end now.<br/>';
?>