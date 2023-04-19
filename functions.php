<?php
function randomPassword($length, $array) {
    $result = '';
    for ($i=0; $i < $length; $i++) { 
        $result .= $array[rand(0, count($array))];
    }
    
    return $result;
}