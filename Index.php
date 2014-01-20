<?php
header("Content-type: text/html; charset=utf-8"); 

require_once dirname(__FILE__) .DIRECTORY_SEPARATOR.'AppphpLoad.php';


$app = HttpRequestFactory::createAppphp();

$app->service();

$app->views();


?>
