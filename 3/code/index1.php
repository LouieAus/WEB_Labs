<?php
// ====== Задание 1.a ======
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-z][a-z]b/ui';
$matches = array();

$count = preg_match_all($regexp, $text, $matches);
var_dump($matches);

// ====== Задание 1.b ======