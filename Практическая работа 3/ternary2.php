<h1>Тернарный оператор + match</h1>
<h1>Задание 1</h1>
<p>Введите число 1:</p>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$a = 40;
$b = 21;
$res = $a < $b  ? ' a меньше b' :'a больше или равно b';
echo $res;
?> 
<h2>задание 2</h2>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$n = 4;
$result = ($n % 2 === 0) ? "четное" : "нечетное";
echo $result;
?>
<h3>задание 3</h3>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$sum = 1200;
$discount = ($sum > 1000) ? 0.10 : 0.5;
$total = $sum - ($sum * $discount);
echo $total;
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
$exists = (($a + $b > $c) && ($a + $c >  $b) && ($b + $c > $c))
? "треугольник существует"
: "Треугольника не существует" ;
echo $exists;
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
$ageGroup = ($age <=1) ? 'Котята':
(($age <= 3) ? 'Молодые коты':
(($age <= 7) ? 'Коты среднего возвраста': 'Почетнные коты'));
echo $ageGroup;
?>
<h6>Задание 6</h6>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
$angel1 = 60;
$angel2 = 30;
$angel3 = 180 - ($angel1 + $angel2);
$result = ($angel1 > 0 && $angel2 > 0 && ($angel1 + $angel2) < 180)
? (($angel1 == 90 || $angel2 == 90 || $angel3 == 90)
? "Треугольник существует и он прямоугольный"
: "Треугольник существует , но он не прямоугольный")
: "такой треугольник не существует";
echo $result;
?>





