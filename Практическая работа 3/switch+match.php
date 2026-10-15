<h1>Оператор Match</h1>
<h1>Задание 1</h1>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php 
if (isset($_POST['digit'])){
    $digit = (int)$_POST['digit'];
    $result = match ('digit') {
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        default => 'Некорректная цифра',
    };
    echo "Результат: $result";
}
?>
<h2>Задание 2</h2>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
if if (isset($_POST['month'])) {
    
}
?>
<h3>Задание 3</h3>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$sum = 1200;
switch (true) {
    case ($sum > 1000):
        $total = $sum * 0.9;
        break;
default:
$total = $sum * 0.95;
break;
};
echo $result;
?>
<h4>Задание 4</h4>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$a = 1;
$b = 2;
$c = 3;
$exists = (($a + $b > $c) && ($a + $c >  $b) && ($b + $c > $c));
switch ($exists) {
case true:
    $result = "Треугольник существует";
    break;
    default; 
    $result = "Треугольника не существует";
    break;
}; 
echo $result;
?>
<h5>Задание 5</h5>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$age = 2.5;
switch (true) {
case ($age <=1):
    $ageGroup = 'Котята';
    break;
    case ($age <=3):
        $ageGroup = 'Молодые коты';
        break;
case ($age <=7):
    $ageGroup = 'Коты средних лет';
    break;
    default;
    $ageGroup = 'Потченные коты';
    break;
}
echo $ageGroup;
?>
<h6>Задание 6</h6>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form
<?php 
$angel1 = 60;
$angel2 = 30;
$angel3 = 180 - ($angel1 + $angel2) < 180;
$isRight = ($angel1 == 90) || ($angel2 == 90) || ($angel1 + $angel2) == 90;
switch (true) {
    case (!$exists):
        $result = "такой треугольник не существует";
        break;
        case ($isRight):
            $result = "Такой треугольник существует и он прямоугольный";
            break;
            default:
            $result = "Такой треугольник существует и он не прямоугольный";
            break;
}
echo $result;
?>


