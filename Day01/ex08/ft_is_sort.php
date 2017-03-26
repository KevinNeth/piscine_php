#!/usr/bin/php
<?php

function	ft_is_sort($array)
{
	$tmp = $array;
	sort($tmp);
	$i = 0;
	while($tmp[$i])
	{
		if ($tmp[$i] != $array[$i])
			return (false);
		$i++;
	}
	return (true);
}

?>
