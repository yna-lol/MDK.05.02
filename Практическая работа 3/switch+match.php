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
    $month = (int)$_POST['month'];
    $holidays = match ($month) {
        1 => '1 января - Новый год, 7 января - Рождество',
        2 => '23 февраля - День защитника Отечества',
        3 => '8 марта - Международный женский день',
        4 => '1 мая - Праздник весны и труда',
        5 => '9 мая - День победы',
        6 => '12 июня - День России',
        7 => 'Нет основных праздников',
        8 => 'Нет основных праздников',
        9 => '1 сентября - День знаний', 
        10 => 'Нет основных праздников',
        11 => '4 ноября - День народного единства',
        12 => '31 декабря - Канун Нового года',
        default => 'Неверный номер месяца',
    };
    echo "Праздники: $holidays";
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
if (isset($_POST['num'])) {
    $num = abs((int)$_POST['num']);
    $lastDigit = $num % 10;
    $squareLastDigit = match ($lastDigit) {
        0 => 0,
        1, 9 => 1,
        2, 8 => 4,
        3, 7 => 9,
        4, 6 => 6,
        5 => 5,
    };
    echo "последняя цифра квадрата: $squareLastDigit";
}
?>
<h4>Задание 4</h4>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
if (isset($_POST['k'])){
    $k = (int)$_POST['k'];
    $lastDigit = $k % 10;
    $word = match (true) {
        ($k >= 11 && $k <= 14) => 'лет',
        $lastDigit == 1 => 'год',
    ($lastDigit >= 2 && $lastDigit <= 4) => 'года',
    default => 'лет',
    };
    echo "Мне $k $word";
}
?>
<h5>Задание 5</h5>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Выберете единицу измерения">
</form>
<?php
if (isset($_POST['mass']) && isset($_POST['unit'])) {
    $m = (float)$_POST['masa'];
    $unit = (int)$_POST['unit'];
    $kg = match ($unit) {
        1 => $m
        2 => $m / 100000,
        3 => $m  / 1000,
        4 => $m * 1000,
        5 => $m * 100,
        default => 0,
    };
    echo "масса в кг: $kg кг";
}
?>



