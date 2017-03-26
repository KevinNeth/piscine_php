#!/usr/bin/php
<?php

if ($argc > 1)
{
	$str = trim($argv[1]);
	while (1)
	{
		$str_tmp = str_replace("  ", " ", $str);
		if ($str_tmp == $str)
			break;
		$str = $str_tmp;
	}
	$array = explode(" ", $str);
	$i = 1;
	while ($array[$i])
	{
		echo "$array[$i]"." ";
		$i++;
	}
	echo "$array[0]"."\n";
}

?>
