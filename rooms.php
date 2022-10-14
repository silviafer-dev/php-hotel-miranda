<?php 
include "BladeOne/lib/BladeOne.php";
 include './service/request.php';

use eftec\bladeone\BladeOne;
// 
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); 
echo $blade->run("rooms", array("data"=> $rooms)); 