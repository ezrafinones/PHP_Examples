<?php

$dtz = new DateTimeZone("Europe/Rome");
echo "Time Zone: " . $dtz->getName() . "<br/>";

foreach ($dtz->getLocation() as $key => $value) {
	echo "{$key} {$value}<br/>";
}

$past = new DateTime("2009-02-12 16:42:33", $dtz);
$current = new DateTime("now", $dtz);

// creates a new instance of DateInterval
$diff = $past->diff($current);
$pastString = $past->format("Y-m-d");
$currentString = $current->format("Y-m-d");
$diffString = $diff->format("%yy %mm, %dd");

echo "Difference between {$pastString} and {$currentString} is {$diffString}";
