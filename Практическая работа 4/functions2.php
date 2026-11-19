<h1>задание 1</h1>
<?php
function getCircmference($radius){
    return 2 * pi() * $radius;
}
$radius =5;
$lenght = getCircmference($radius);
echo 'длина окружности - ' . round($lenght, 2);
?>
<h2>задание 2</h2>
<?php
function getTrianleArea($a, $b, $c) {
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a){
        return 0;
    }
    $p = ($a + $b + $c) / 2;
    $area = sqrt($p * ($p  - $a) * ($p - $b ) * ($p - $c));
    return $area;
}
$a = 3;
$b = 4;
$c = 5;
$area = getTrianleArea($a, $b , $c);
if ($area ==0){
    echo 'Треугольник с такими сторонами не существует (площадь: 0)';
} else{
    echo 'Площадь треугольника - ' . round($area, 2);
}
?>
<h3>задание 3</h3>
<?php
function getMaxDivisor($n){
    $n = abs($n);
    if ($n <= 1)return 0;
    for ($i = intval($n / 2); $i >= 1; $i --){
        if ($n % $i ==0){
            return $i;
        }
    }
    return 1;
}
$num = 18;
$maxDiv = getMaxDivisor($num);
echo "наибольший делитель числа $num (кроме него нет самого) - $maxDiv";
?>
<h4>Задание 4</h4> 
<?php
function getAllDivisors($n) {
    $n = abs($n);
    $divisors = [];
    for ($i = 1; $i <= $n; $i ++){
        if ($n % $i ==0){
            $divisors[] = $i;
        }
    }
    return $divisors;
}
$num = 24;
$divisorsArray = getAllDivisors($num);
echo "делители числа $num:" . implode(',', $divisorsArray);
?>
<h4>Задание 5</h4>
<?php
function getSumOfSquares(array $arr){
    $sum = 0;
    foreach ($arr as $num){
        $sum += ($num * $num);
    } 
    return $sum;
}
$numbers = [2, 3, 4];
$resultSum = getSumOfSquares($numbers);
echo "Сумма квадратов чисел(" . implode(',', $numbers) . ") равна: $resultSum";
?>
<h4>задание 6</h4>
 <?php
function covertToString($arr){
    $result = [];
    foreach ($arr as $item){
        if (is_array($item)){
            $result[] = 'array';
        }else {
            $result[] = '$item';
        }
    }
    return implode(',', $result);
}
$data = [1, 'текст', [2,3], 4.5, ['a', 'b']];
echo 'convertToString'($data);
?>
<h4>Задание 7</h4>
<?php
function getTotalLenght(...$strings) {
    $total = 0;
    foreach ($strings as $str){
        $total += mb_strlen($str);
    }
    return $total;
}
echo 'Общая длина строк - '. getTotalLenght('привет','мир','PHP');
?>