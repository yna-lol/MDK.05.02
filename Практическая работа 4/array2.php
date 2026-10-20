<h1>Массивы</h1>
<h1>Задание 1</h1>
<?php
$nums = [2, 44, 3, 7, 12];
$max = $nums [0];
foreach ($nums as $num) {
if ($num > $max){
$max = $num;
}
}
echo "Максимум = $max"
?> 
<h2>Задание 2</h2>
<?php
$nums = [2, 5, 10, 3, 8];
$sum = [0];
$product = 1;
foreach ($nums as $num) {
  $sum += $num;
  $product *= $num;
    }
echo "Сумма = $sum <br>";
echo "Произведение = $product";
?>
<h3>Задание 3</h3>
<?php
$nums = [2, 4, 3];
$sum = [0];
$count = count($nums);
foreach ($nums as $num) {
    $sum += $num;
}
if ($count > 0) {
    $average = $sum / $count;
} else {
    $average = 0;
}
echo "Количество элементов: $count <br>";
echo "Сумма элементов: $sum <br>";
echo "Среднее арифметическое: $average";
?>
<h4>Задание 4</h4> 
<?php
$originalNums = [-2.5, 3.0, -4.1 , 5.2, 0];
$newNums = [];
foreach ($originalNums as $newNums) {
    if ($num > 0) {
        $newNums [] = $num * $num;
    } elseif ($num < 0){
        $newNums [] = abs($num);
    }else {
        $newNums [] = $num;
    }
}
echo "Исходный  массив:";
 foreach ($originalNums as $newNums)

?>
<h5>Задание 5</h5>
<?php
$num = [10, 20, 30, 40, 50, 60, 70];
echo "Исходный массив";
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
echo "Элементы с четными индексами (0, 2, 4...)":[span_0](start_span)[span_0](end_span);
foreach ($nums as $key => $value) {
    if ($key % 2 == 0){
        echo $value . " ";
    }
}
?>
<h6>Задание 6</h6>
<?php
$nums = [2, 5, 3, 8, 1, 10, 10, 15];
echo "Исходный массив:";
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
echo "Элементы которые больше предыдущего:";
for ($i = 1; $i < count($nums); $i++){
    if ($nums[$i] > $nums[$i - 1]){
        echo $nums[$i] . " ";
    }
}
?>
<h7>Задание 7</h7>
<?php
$nums = [1, 2, 3, 4, 5, 6, 7,];
echo "исходный массив:";
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
for ($i = 0; $i < count($nums) - 1; $i += 2){
    $temp = $nums[$i];
    $nums[$i] = $nums[$i + 1];
    $nums[$i + 1] = $temp;
}
echo "Массив от перестановки соседей:";
foreach ($nums as $num) {
    echo $num . "";
}
?>
<h8>задание 8</h8>
<?php
$nums = [1, 2, 3, 4, 5];
echo "исходный массив:";
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
if (count($nums) > 0){
    $lastElement = array_pop($nums);
    array_unshift($nums, $lastElement);
}
echo "массив после сдвига вправо:";
foreach ($nums as $num) {
    echo $num . " ";
}
?>
<h9>Задание 9</h9>
<?php
$nums = [1, 2, 3, 2, 1, 4];
echo "исходный массив:";
foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
$count = array_count_values($nums);
$pairs = 0;
foreach ($counts as $count) {
    if ($count >= 2){
        $pairs += ($count * ($count - 1)) / 2;
    }
}
echo "Количество пар равных элементов: $paris";
?>