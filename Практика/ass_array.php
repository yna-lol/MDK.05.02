<h1>Ассоционтивные массивы</h1>
<h2>Создание массива</h2>
<?php
$nums = ['one' => 12, 'two' => 54,'three' => 3, 'four' => 55, 'five' => 42];
?>
<h2>вывод массива</h2>
<?php
foreach ($nums as $num) {
    echo $num,' , ';
}
?>
<h2>Обращение к элементу массива</h2>
<?php
echo 'Второй элемент - '. $nums['two'];
$nums ['two'] =  555;
?>
<h2>Создание элемента массива</h2>
<?php
$nums['six'] = 34;
$nums[] = 8;
$nums[5] = 77;
$nums[] = 22;
?>
<h2>Перебор с ключами</h2>
<?php
foreach ($nums as $key => $vale) {
    echo "$key  - $vale <br>";
}
?>