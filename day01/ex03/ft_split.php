#!/usr/bin/php
<?php

function ft_split($var) 
{
	$ret =  preg_split('/\s+/', $var);
	sort($ret);
	return ($ret);
}

?>