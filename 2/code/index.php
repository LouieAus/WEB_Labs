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


// ======== Задание 13 ========
$my_num = 99;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer, "\n";


// ======== Задание 14 ========
// Работа с %
$a = 10;
$b = 3;
$remainder = $a % $b;

if ($remainder == 0)
    echo "Делится\n";
else
    echo "Делится с остатком $remainder\n";

// Работа со степенью и корнем
$st = pow(2, 10);

$sqrt_res = sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$result = 0;
foreach ($arr as $value)
    $result += pow($value, 2);
$result = sqrt($result);

echo $st, "\t", $sqrt_res, "\t", $result, "\n";

// Работа с функциями округления
$sqrt_res1 = sqrt(379);
$sqrt_round1 = round($sqrt_res1, 0);
$sqrt_round2 = round($sqrt_res1, 1);
$sqrt_round3 = round($sqrt_res1, 2);
echo $sqrt_round1, "\t", $sqrt_round2, "\t", $sqrt_round3, "\n";

$sqrt_res2 = sqrt(587);
$sqrt_floor = floor($sqrt_res2);
$sqrt_ceil = ceil($sqrt_res2);
$sqrt_arr = ['floor' => $sqrt_floor, 'ceil' => $sqrt_ceil];

// Работа с min и max
$arr2 = [4, -2, 5, 19, -130, 0, 10];
$min = min($arr2);
$max = max($arr2);

// Работа с рандомом
echo rand(1, 100), "\n";

$arr_rand = [];
for ($i = 0; $i != 10; $i++)
    $arr_rand[] = rand();

// Работа с модулем
$a = 10; $b = 18;
echo abs($a - $b), "\n";
$a = -1; $b = 5;
echo abs($a - $b), "\n";
$a = 8; $b = -4;
echo abs($a - $b), "\n";

$arr3 = [1, 2, -1, -2, 3, -3];
$new_arr3 = [];
foreach ($arr3 as $value)
    $new_arr3[] = abs($value);

// Общее: делители числа
$c = 99;
$dividers = [];
for ($i = 1; $i <= $c; $i++)
    if ($c % $i == 0)
        $dividers[] = $i;

var_dump($dividers);

// Общее: сумма элементов
$arr4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$result = 0;
for ($i = 0; $i != count($arr4); $i++)
{
    $sum += $arr4[$i];
    if ($sum > 10) {
        $result = $i + 1;
        break;
    }
}
echo $result, "\n";


// ======== Задание 15 ========
function printStringReturnNumber()
{
    echo "This is working function!\n";
    return 99;
}

$my_num = printStringReturnNumber();
echo $my_num, "\n";


// ======== Задание 16 ========
function increaseEnthusiasm($string)
{
    return $string . '!';
}
echo increaseEnthusiasm("Hello"), "\n";

function  repeatThreeTimes($string)
{
    return $string . $string . $string;
}
echo repeatThreeTimes("PHP_"), "\n";

echo increaseEnthusiasm(repeatThreeTimes("CPP_")), "\n";

function cut($string, $q = 10)
{
    return substr($string, 0, $q);
}

$arr5 = [7, 12, 55, 9, -5, 0, 3, 31];
function printArray($array, $offset = 0)
{
    if ($offset < count($array)) {
        echo $array[$offset], "\t";
        printArray($array, ++$offset);
    }
}
printArray($arr5);

function countDigits($number)
{
    $num_sum = array_sum(str_split($number));

    $result = 0;
    if ($num_sum > 9)
        $result = countDigits($num_sum);
    else
        $result = $num_sum;

    return $result;
}