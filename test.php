<?php

if (!isset($myObj)) 

    $myObj = new stdClass();

$myObj->site="Homzzang";

$myObj->domain="Homzzang.com";

$myObj->open=2012;



$myJSON = json_encode($myObj);

echo $myJSON;

?>