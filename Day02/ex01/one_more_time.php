#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');

if ($argc == 2)
{
	if (preg_match("#^[a-zA-Z][a-z]{4,7}\s[1-3]?[0-9]\s[a-zA-Z][a-z]{2,8}\s[0-9]{4}\s([0-9]{2}:){2}[0-9]{2}$#", $argv[1]))
	{
		$date = array("lundi", "mardi", "mercredi", "jeudi", "vendredi",
			"samedi", "dimanche");
		$month = array("janvier", "fevrier", "mars", "avril", "mai", "juin",
			"juillet", "aout", "septembre", "octobre", "novembre", "decembre");
		$str = strtolower($argv[1]);
		$array = explode(" ", $str);
		if (($numdate = array_search($array[0], $date)))
		{
			if (($nummonth = array_search($array[2], $month)))
			{
				$hour = explode(":", $array[4]);
				echo mktime($hour[0], $hour[1], $hour[2], $nummonth + 1, $array[1], $array[3]);
			}
			else
				echo "Syntax Error"."\n";
		}
		else
			echo "Syntax Error"."\n";
	}
	else
		echo "Wrong Format"."\n";
}
else
	echo "\n";
// lundi mardi mercredi jeudi vendredi samedi dimanche
// janvier fevrier mars avril mai juin juillet aout septembre octobre novembre decembre
?>
