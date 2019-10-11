#!/usr/bin/php
<?
echo trim(preg_replace("/\s+/", " ", $argv[1]))."\n";
?>