<?php

function sumLines($filename) {
    if (!is_readable($filename)){
        return false;
    }

    $lines = file($filename);
    if (!$lines){
        return false;
    }
    $lines = array_map(function($line){
        return intval(trim($line));
    }, $lines);
    return array_sum($lines);
}
