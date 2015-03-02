<?php
/*$data = array(1,2,"three");
$jsonData = json_encode($data);
echo $jsonData;
*/

$jsonData = "[1, 2, [3, 4], \"five\"]";
$data = json_decode($jsonData);
print_r($data);
