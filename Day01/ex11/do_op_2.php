#!/usr/bin/php
<?php

if ($argc == 2)
{
	$str = trim($argv[1]);
	$operateur = array("+", "-", "*", "/", "%");
	$str = str_replace($operateur, " ", $str);
	while (1)
	{
		$str_tmp = str_replace("  ", " ", $str);
		if ($str_tmp == $str)
			break;
		$str = $str_tmp;
	}
	$array = explode(" ", $str);
	if (count($array) != 2 || !ctype_digit($array[0]) || !ctype_digit($array[1]))
	{
		echo "Syntax Error";
		exit ();
	}
	if (strstr($argv[1], '+'))
		echo $array[0] + $array[1];
	if (strstr($argv[1], '-'))
		echo $array[0] - $array[1];
	if (strstr($argv[1], '*'))
		echo $array[0] * $array[1];
	if (strstr($argv[1], '/'))
		echo $array[0] / $array[1];
	if (strstr($argv[1], '%'))
		echo $array[0] % $array[1];
}
else
	echo "Incorrect Parameters";

?>
