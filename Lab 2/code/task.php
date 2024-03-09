<?php

echo "---------------------------------------- \n";

echo "Task 1 \n";
$very_bad_unclear_name = "15 chicken wings";
$order = & $very_bad_unclear_name;
$order .= ' with spicy sauce';
echo "$very_bad_unclear_name \n";
echo "---------------------------------------- \n";

echo "Task 2 \n";
$integer = 1;
echo "$integer \n";
$float = 1.0;
echo "$float \n";
$twelve = $integer + 11;
echo "$twelve \n";
$last_month = 1187.23; $this_month = 1089.98;
echo $last_month - $this_month, "\n";
echo "---------------------------------------- \n";

echo "Task 11 \n";
$num_languages = 4; $months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language, "\n";
echo "---------------------------------------- \n";

echo "Task 12 \n";
echo 8**2, "\n";
echo "---------------------------------------- \n";

echo "Task 13 \n";
$my_num = 30;
$answer  = 30;
$answer += 2; $answer *= 2; $answer -= 2; $answer /= 2; $answer -= $my_num;
echo "$answer \n";
echo "---------------------------------------- \n";

echo"Task 14 \n";
$a = 10; $b = 3;
echo $a % $b, "\n";
if ($a % $b === 0) {
    echo 'Делится', $a / $b, "\n"; }
else {
    echo 'Делится с остатком ', $a % $b, "\n"; }
$st = pow(2, 10); $sqrt1 = sqrt(245);
$array = [4, 2, 5, 19, 13, 0, 10]; $sum_square = 0.0;
foreach ($array as $value) {
    $sum_square += pow($value, 2);
}
$square1 = round(sqrt(379),0); $square2 = round(sqrt(379), 1); $square3 = round(sqrt(379), 2);
$array = [];
$array['floor'] = floor(sqrt(587));
$array['ceil'] = ceil(sqrt(587));
$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);
echo rand(1, 100), "\n";
$some_array = [];
$i = 0;
while ($i != 10) {
    $some_array[$i] = rand(1,100);
    $i++;
}
$a = 17; $b = 25;
echo abs($a - $b), "\n";
$array = [1,2,-1,-2,3,-3];
for($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
        $array[$i] = abs($array[$i]);
    }
}
$divide_array = [];
$some_number = 30;
$index = 0;
for ($i = 1; $i <= 30; $i++) {
    if ($some_number % $i == 0) {
        $divide_array[$index] = $i;
        $index++;
    }
}
$some_array = [1,2,3,4,5,6,7,8,9,10];
$count = 0;
$index = 0;
$i = 0;
while (10 > $i) {
    $i += $some_array[$index];
    $index++;
    $count++;
}
echo "---------------------------------------- \n";

echo "Task 15 \n";
function printStringReturnNumber($someArg) {
    return (int)$someArg;
}
$my_num = printStringReturnNumber('542');
echo $my_num, "\n";
echo "---------------------------------------- \n";

echo "Task 16 \n";
function  increaseEnthusiasm($someStr) {
    return $someStr . '!';
}
echo increaseEnthusiasm('It is perfect'), "\n";
function repeatThreeTimes($someStr) {
    return $someStr . $someStr . $someStr;
}
echo repeatThreeTimes('Super'), "\n";
echo increaseEnthusiasm(repeatThreeTimes('Super')), "\n";
function cut($someStr, $someInt = 10) {
    return substr($someStr, 0, $someInt);
}
echo cut('It is a perfect example of the text', 24), "\n";
function recursive($array, $index) {
    if ($index < count($array)) {
        echo $array[$index], ' ';
        recursive($array, $index + 1);
    }
}
echo recursive([1,2,3,4,5,6,7],0), "\n";
function recursiveSum($someArg) {
    $someArg = (string)$someArg;
    $sum = 0;
    for ($i = 0; $i < strlen($someArg); $i++) {
        $sum += (int)$someArg[$i];
    }
    if (9 < $sum)
        return recursiveSum($sum);
    else
        return $sum;
}
echo recursiveSum(358), "\n";
echo "---------------------------------------- \n";

echo "Task 17 \n";
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = var_dump(str_repeat('x', $i + 1));
}
function arrayFill($string, $count) {
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[$i] = $string;
    }
    return $array;
}
$array = [[1,2,3],[4,5],[6]];
$sum = 0;
for ($i = 0; $i < count($array); $i++) {
    $sum += array_sum($array[$i]);
}
$array = [];
for ($i =0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $i * 3 + $j + 1;
    }
}
$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo $result, "\n";
$user = ['name' => 'Aleksey', 'surname' => 'Shramko', 'patronymic' => 'Evgenyevich'];
echo "$user[surname] ", "$user[name] ", "$user[patronymic] ", "\n";
$date = ['year' => '2024', 'month' => 'March', 'day' => '9'];
echo implode('-', $date), "\n";
$arr = ['a','b','c','d','e'];
echo count($arr), "\n";
echo $arr[count($arr) - 1], "\n"; echo $arr[count($arr) - 2], "\n";
echo "---------------------------------------- \n";

echo "Task 18", "\n";
function TrueFalse($first, $second) {
    if (10 <$first + $second)
        return True;
    else
        return False;
}
function TrueFalse2($first, $second) {
    if ($first === $second)
        return True;
    else
        return False;
}
$test = 0;
if ($test ==0) {echo 'верно', "\n";};
$age = 75;
if ((10 > $age) || (99  < $age))
    echo 'Число не попадает в нужный диапозон', "\n";
else {
    $age = (string)$age;
    $sum = 0;
    for ($i = 0; $i < strlen($age); $i++)
        $sum += (int)$age[$i];
    if (9 >= $sum)
        echo 'Сумма цифр однозначна', "\n";
    else
        echo 'Сумма цифр двузначна', "\n";
}
$arr = [7,2,9];
if (count($arr) == 3)
    echo array_sum($arr), "\n";
echo "---------------------------------------- \n";

echo "Task 19 \n";
$answer = '';
for ($i = 1; $i < 21; $i++) {
    $answer = $answer . 'x';
    echo $answer, "\n";
}
echo "---------------------------------------- \n";

echo "Task 20 \n";
$someArr = [1,2,3,4,5,6,7,0,24];
echo array_sum($someArr) / count($someArr), "\n";
echo array_sum(range(1,100)), "\n";
$array = [1,4,9,16,25,36,49,64,81,100];
function sqrtArray($array, $index) {
    $array[$index] = sqrt($array[$index]);
    $index++;
    if (count($array) > $index)
        return sqrtArray($array, $index);
    return $array;
}
function alphabet($array, $index) {
    $array[chr($index + 96)] = $index;
    $index++;
    if (27 > $index)
        return alphabet($array, $index);
    return $array;
}
$str = '1234567890';
function sumPairs($str,$order) {
    if ($order < strlen($str) - 1)
        return (int)($str[$order] . $str[$order + 1]) + sumPairs($str, $order + 2);
    else
        return 0;
}
echo "---------------------------------------- \n";
