<?php
header('Content-type: text/plain');


// ======== Задание 1 ========
$veryBadUnclearName = "data info ";

$order =& $veryBadUnclearName;
$order .= "user1";

echo "Developer variable is $veryBadUnclearName\n";


// ======== Задание 2 ========
$var1 = 13;
echo "$var1\n";

$var2 = 3.14;
echo "$var2\n";

echo --$var1, "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month, "\n";


// ======== Задание 11 ========
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_languages = $days / $num_languages;
echo $days_per_languages, "\n";

// ======== Задание 12 ========
echo 8**2, "\n";
