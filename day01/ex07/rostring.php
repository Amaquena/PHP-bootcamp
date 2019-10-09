#!/usr/bin/php
<?php
$str = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
$arr = preg_split('/\s+/', $str);
$str2 = array($arr[0]);
unset($arr[0]);
$str3 = array_merge($arr, $str2);

echo implode(" ",$str3)."\n";
?>