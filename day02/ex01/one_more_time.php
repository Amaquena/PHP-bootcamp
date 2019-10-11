#!/usr/bin/php
<?php

if(preg_match('~(?i)\b(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche)(?-i) ([0-9]{1,2}) (?i)(janvier|février|mars|avril|mai|juin|juillet|aout|septembre|octobre|novembre|décembre)(?-i) ([0-9]{4}) ([0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2})\b~', $argv[1], $match))
{
	date_default_timezone_set('Europe/Paris');
//	print_r($match);
//	echo strtotime($match[1]);
//	unset($argv[0]);
//	$str = implode($argv);
//	echo strtotime($str);
}


?>