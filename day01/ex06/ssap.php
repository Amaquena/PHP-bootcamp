#!/usr/bin/php
<?php

$strings = implode(" ", $argv);
$strings  = trim(preg_replace('/\s\s+/', ' ', $strings));
$arr = preg_split('/\s+/', $strings);
unset($arr[0]);
sort($arr);

echo implode("\n", $arr)."\n";
?>