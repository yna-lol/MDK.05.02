<h3>Практическая работа</h3>
<p>Задание 1</p>
<?php
$startNumber = 2; // С какого числа начинаем 
$multiplier = 3; // С какого числа мы умножаем
$quantity = 5; // Количество чисел в переменной
$current = $startNumber;
for ($i = 0; $i < $quantity; $i++){
    echo $current . "<br>";
    $current = $current * $multiplier;
}
?>
<p>задание 2</p>
<?php
$lastNumber = 10; // До какого числа считаем
$sum = 0;
for($i = 1; $i <=$lastNumber; $i++){
    $sum = $sum + $i;
}
echo "сумма" . $sum;
?>
<p>задание 3</p>
<?php
$lastNumber = 10;
$multiplicationResult = 1;
for ($i = 1; $i <= $lastNumber; $i++){
    // Проверяем, четное ли число
    if ($i % 2 == 0)
        $multiplicationResult = $multiplicationResult * $i; 
    echo "произведение четных" . $multiplicationResult;
}
?>
<p>Задание 4</p>
<?php
$n = 10;
$sum = 0;
for($day = 1; $day <= $n; $day++){
    $total = $total + $sum;
    $sum = $sum * 1.1;
}
    echo "суммарный путь: " . $total . "км";
    ?>
    <p>задание 5</p>
    <?php
    $totalPaws = 64;
    echo "возможные варианты:<br>";
    for($rabbits = 0; $rabbits <= 16; $rabbits++) {
        $pawForGeese = $totalPaws - ($rabbits * 4);
        if($pawForGeese >= 0 && $pawForGeese % 2 ==0)
            $geese = $pawForGeese / 2;
        echo "Кроликов: $geese, Кроликов: $rabbits<br>";
    }
