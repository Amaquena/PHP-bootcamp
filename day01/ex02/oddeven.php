#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	$var = rtrim(fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		exit;
	}
	else if (is_numeric($var))
	{
		if ($var % 2 == 0)
			echo "The number $var is even\n";
		else
			echo "The number $var is odd\n";
	}
	else
		echo "'$var' is not a number\n";
}
?>