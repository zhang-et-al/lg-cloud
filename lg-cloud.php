#!/usr/bin/php

<?php

require "LGBot.php";

$me = new LGBot("YOUR EMAIL HERE", "YOUR PASSWORD HERE", false);

$imgOpt = array_search('--image', $argv);

if($imgOpt !== false)
{
	for($i = 1; $i < count($argv); ++$i){
		if($i == $imgOpt) continue;
		echo $me->uploadImage($argv[$i]) . "\n";
	}
}
else
{
	for($i = 1; $i < count($argv); ++$i){
		echo $me->uploadFile($argv[$i]) . "\n";
	}
}
