#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = trim($str);
	while (1)
	{
		$str_tmp = str_replace("  ", " ", $str);
		if ($str_tmp == $str)
			break ;
		$str = $str_tmp;
	}
	$array = explode(" ", $str);
	sort($array);
	return ($array);
}
print_r(ft_split("   Helloo    World AAA    "));
?>
