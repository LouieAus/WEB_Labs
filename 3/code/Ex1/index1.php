<?php
header('Content-type: text/plain');

// ====== Задание 1.a ======
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-z][a-z]b/ui';
$matches = array();

$count = preg_match_all($regexp, $text, $matches);
var_dump($matches);

// ====== Задание 1.b ======
$text = 'a1b2c3';
$regexp = '/[0-9]+/';

$result = preg_replace_callback(
    $regexp,
    function ($num)
    {
        return (string)(pow($num[0], 3));
    },
    $text);
echo "\n", $result;