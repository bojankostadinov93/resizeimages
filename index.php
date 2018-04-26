<?php
/**
 * Created by PhpStorm.
 * User: Bojan
 * Date: 3/2/2018
 * Time: 1:50 PM
 */

$names=array('bojan','mladen','neim');

$numbers_names=0;

foreach ($names as $name){
    $numbers_names ++;

    $stringToEcho=sayHello($name);
    echo $stringToEcho;
}
echo "Echoed $numbers_names names\n";
function sayHello ($name){
    return "HEllo, $name";
}