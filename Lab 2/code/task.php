<?php

echo "---------------------------------------- \n";

echo "Task 1 \n";
$very_bad_unclear_name = "15 chicken wings";
$order = & $very_bad_unclear_name;
$order .= ' with spicy sauce';
echo "Ваш заказ: ", $very_bad_unclear_name, "\n";
echo "---------------------------------------- \n";

echo "Task 2 \n";
$integer = 1;
echo "Целое число: ", $integer, "\n";
$float = 1.17;
echo "Дробное число: ", $float, "\n";
echo "Вывод числа 12: ", $integer + 11, "\n";
$last_month = 1187.23; $this_month = 1089.98;
echo "В прощлом месяце я потратил больше на ", $last_month - $this_month, "\n";
echo "---------------------------------------- \n";

echo "Task 11 \n";
$num_languages = 4; $months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Количество дней для изучения одного языка: ", $days_per_language, "\n";
echo "---------------------------------------- \n";

echo "Task 12 \n";
echo "Восьмерка в квадрате: ", 8 ** 2, "\n";
echo "---------------------------------------- \n";

echo "Task 13 \n";
$my_num = 30;
$answer  = $my_num;
$answer += 2; $answer *= 2; $answer -= 2; $answer /= 2; $answer -= $my_num;
echo "Ответ: ", $answer, "\n";
echo "---------------------------------------- \n";

echo "Task 14 \n";
$a = 10; $b = 3;
echo "Остаток от деления a на b: ", $a % $b, "\n";
if (0 === $a % $b) {
    echo 'Делится', $a / $b, "\n"; }
else {
    echo 'Делится с остатком ', $a % $b, "\n"; }
$st = pow(2, 10); $sqrt245 = sqrt(245);
$array = [4, 2, 5, 19, 13, 0, 10]; $sum_square = 0.0;
foreach ($array as $value) {
    $sum_square += pow($value, 2);
}
$ToTheInteger = round(sqrt(379),0); $ToTheTenths = round(sqrt(379), 1); $ToTheHundredths = round(sqrt(379), 2);
$answerArray = [];
$array['floor'] = floor(sqrt(587));
$array['ceil'] = ceil(sqrt(587));
$min = min([4, -2, 5, 19, -130, 0, 10]);
$max = max([4, -2, 5, 19, -130, 0, 10]);
echo "Случайное число от 1 до 100: ", rand(1, 100), "\n";
$arrayWithRandomNumbers = [];
for ($index = 0; $index < 11; $index++)
    $arrayWithRandomNumbers[$index] = rand(1, 100);
$a = 17; $b = 25;
echo "Моудль разности a и b равен: ", abs($a - $b), "\n";
$futureArrayWithPositiveNumbers = [1, 2, -1, -2, 3, -3];
for($index = 0; $index < count($futureArrayWithPositiveNumbers); $index++) {
    $futureArrayWithPositiveNumbers[$index] = abs($futureArrayWithPositiveNumbers[$index]);
}
$arrayOfDividers = [];
$some_number = 30;
$index = 0;
for ($possibleDivider = 1; $possibleDivider < $some_number + 1; $possibleDivider++) {
    if (0 === $some_number % $possibleDivider)
        $arrayOfDividers[$index] = $possibleDivider; $index++;
}
$some_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$amountOfElements = 0;
$index = 0;
$sumOfElements = 0;
while (11 > $sumOfElements) {
    $sumOfElements += $some_array[$index];
    $index++;
    $amountOfElements++;
}
echo "---------------------------------------- \n";

echo "Task 15 \n";
function printStringReturnNumber(string $someStr) : int {
    return (int) $someStr;
}
$my_num = printStringReturnNumber('542');
echo "Результат использования функции для строки '542': ", $my_num, "\n";
echo "---------------------------------------- \n";

echo "Task 16 \n";
function  increaseEnthusiasm(string $someStr) : string {
    return $someStr . '!';
}
echo "Результат выполнения функции для строки 'It is perfect': ", increaseEnthusiasm('It is perfect'), "\n";
function repeatThreeTimes(string $someStr) : string {
    return $someStr . $someStr . $someStr;
}
echo "Результат выполнения функции для строки 'Super': ", repeatThreeTimes('Super'), "\n";
echo "Результат выполнения двух предыдущих функций вместе: ", increaseEnthusiasm(repeatThreeTimes('Super')), "\n";
function cut(string $someStr, int $someInt = 10) : string {
    return substr($someStr, 0, $someInt);
}
echo "Результат выполнения функции для строки 'It is a perfect example of the text': ", cut('It is a perfect example of the text', 24), "\n";
function elementsByRecursive($someArray, int $index) : string {
    if ($index < count($someArray)) {
        echo $someArray[$index], ' ';
        elementsByRecursive($someArray, $index + 1);
    }
    return ' ';
}
echo elementsByRecursive([1, 2, 3, 4, 5, 6, 7], 0), "\n";
function recursiveSumOfNumerals(int $someInt) : int {
    $someInt = (string) $someInt;
    $result = 0;
    for ($index = 0; $index < strlen($someInt); $index++)
        $result += (int) $someInt[$index];
    if (9 < $result)
        return recursiveSumOfNumerals($result);
    return $result;
}
echo recursiveSumOfNumerals(358), "\n";
echo "---------------------------------------- \n";

echo "Task 17 \n";
$arrayWithX = [];
for ($index = 0; $index < 10; $index++) {
    $arrayWithX[$index] = str_repeat('x', $index + 1);
}
function arrayFill(string $someStr, int $amount) : array {
    $resultArray = [];
    for ($index = 0; $index < $amount; $index++)
        $resultArray[$index] = $someStr;
    return $resultArray;
}
$twoDimensionalArray = [[1, 2, 3], [4, 5], [6]];
$sumOfElements = 0;
for ($index = 0; $index < count($twoDimensionalArray); $index++)
    $sumOfElements += array_sum($twoDimensionalArray[$index]);
$futureTwoDimensionalArray = [];
for ($index1 = 0; $index < 3; $index++)
    for ($index2 = 0; $index2 < 3; $index2++)
        $array[$index1][$index2] = $index1 * 3 + $index2 + 1;
$someArray = [2, 5, 3, 9];
$result = $someArray[0] * $someArray[1] + $someArray[2] * $someArray[3];
echo "Результат суммы умножения 1-ого элемента на 2-ой и 3-его на 4-ый: ", $result, "\n";
$user = ['name' => 'Aleksey', 'surname' => 'Shramko', 'patronymic' => 'Evgenyevich'];
echo "Фамилия-Имя-Отчество: ", "$user[surname] ", "$user[name] ", "$user[patronymic] ", "\n";
$date = ['year' => '2024', 'month' => 'March', 'day' => '17'];
echo "Сегодняшняя дата: ", implode('-', $date), "\n";
$arr = ['a','b','c','d','e'];
echo "Количество элементов: ", count($arr), "\n";
echo "Последний элемент: ", $arr[count($arr) - 1], "\n"; echo "Предпоследний элемент ", $arr[count($arr) - 2], "\n";
echo "---------------------------------------- \n";

echo "Task 18", "\n";
function TrueFalseMoreThan10(int $firstNumber, int $secondNumber) : bool {
    return (10 < $firstNumber + $secondNumber);
}
function TrueFalseEqual($firstNumber, $secondNumber) : bool {
    return ($firstNumber === $secondNumber);
}
$test = 0;
if ($test == 0) {echo 'верно', "\n";};
$age = 75;
if ((10 > $age) || (99  < $age))
    echo 'Число не попадает в нужный диапозон', "\n";
else {
    $age = (string) $age;
    $sumOfNumerals = 0;
    for ($index = 0; $index < strlen($age); $index++)
        $sumOfNumerals += (int) $age[$index];
    if (10 > $sumOfNumerals)
        echo 'Сумма цифр однозначна', "\n";
    echo 'Сумма цифр двузначна', "\n";
}
$arr = [7,2,9];
if (count($arr) === 3)
    echo "Количество элементов равно 3, поэтому сумма элементов равна: ", array_sum($arr), "\n";
echo "---------------------------------------- \n";

echo "Task 19 \n";
$answer = '';
for ($amountOfX = 1; $amountOfX < 21; $amountOfX++) {
    $answer = $answer . 'x';
    echo $answer, "\n";
}
echo "---------------------------------------- \n";

echo "Task 20 \n";
$someArr = [1, 2, 3, 4, 5, 6, 7, 0, 24];
echo "Среднее арифметическое данного массива: ", array_sum($someArr) / count($someArr), "\n";
echo "Сумма цифр от 1 до 500: ", array_sum(range(1,100)), "\n";
$FutureArrayWithSqrtElements = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
function sqrtOfElementsOfArray($array, int $index) : array {
    $array[$index] = sqrt($array[$index]);
    $index++;
    if (count($array) > $index)
        return sqrtOfElementsOfArray($array, $index);
    return $array;
}
function alphabet($array, int $index) : array {
    $array[chr($index + 96)] = $index;
    $index++;
    if (27 > $index)
        return alphabet($array, $index);
    return $array;
}
$str = '1234567890';
function sumPairs($someStr,$index) : int {
    if ($index < strlen($someStr) - 1)
        return (int)($someStr[$index] . $someStr[$index + 1]) + sumPairs($someStr, $index + 2);
    else
        return 0;
}
echo "---------------------------------------- \n";

