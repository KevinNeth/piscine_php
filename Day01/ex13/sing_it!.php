#!/usr/bin/php
<?php

if ($argc == 2)
{
	if ($argv[1] == "mais pourquoi cette demo ?")
	{
		echo "Tout simplement pour qu'en feuilletant le sujet"."\n";
		echo "on ne s'apercoive pas de la nature de l'exo"."\n";
	}
	if ($argv[1] == "mais pourquoi cette chanson ?")
		echo "Parce que Kwame a des enfants"."\n";
	if ($argv[1] == "vraiment ?")
	{
		$array[0] = "Nan c'est parce que c'est le premier avril"."\n";
		$array[1] = "Oui il a vraiment des enfants"."\n";
		$value = array_rand($array);
		echo $array[$value];
	}
}

?>
