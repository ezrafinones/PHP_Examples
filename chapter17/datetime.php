<?php

$dtz = new DateTimeZone("America/Halifax");
$dt = new DateTime("2010-02-12 16:42:33", $dtz);

echo "date: " . $dt->format("Y-m-d h:i:s");
