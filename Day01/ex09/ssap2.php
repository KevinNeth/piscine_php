#!/usr/bin/php
<?php

if ($argc > 1)
{
	unset($argv[0]);
	$str = implode(" ", $argv);
	$str = trim($str);
	while (1)
	{
		$str_tmp = str_replace("  ", " ", $str);
		if ($str_tmp == $str)
			break;
		$str = $str_tmp;
	}
	$array = explode(" ", $str);
	foreach ($array as $case)
	{
		if (ctype_alpha($case))
			$alpha[] = $case;
		else if (is_numeric($case))
			$num[] = $case;
		else
			$other[] = $case;
	}
	sort($alpha, SORT_FLAG_CASE | SORT_STRING);
	sort($num, SORT_STRING);
	sort($other);
	$array = array_merge($alpha, $num, $other);
	foreach ($array as $case)
		echo "$case"."\n";
}

?>
