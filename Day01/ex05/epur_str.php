#!/usr/bin/php
<?php

if ($argc == 2)
{
	$str = trim($argv[1]);
	while(1)
	{
		$str_tmp = str_replace("  ", " ", $str);
		if ($str_tmp == $str)
			break;
		$str = $str_tmp;
	}
	echo "$str";
}

?>
