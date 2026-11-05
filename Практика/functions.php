<h1>Функции</h1>
<?php
function sayHello($name)
{
echo "<p>Hello, $name</p>";
}
sayHello('Вася');
sayHello('Лера');
sayHello('Григорий');
?>
<h2>Функция с нескольких параметрами</h2>
<?php
function fullName($fName, $lName)  {
echo "$fName $lName ";
}
fullName('Вася', 'Иванов');
?>
<h2>Функция с параметрами по умолчанию</h2>
<?php
function showUserInfo ($fName, $lName, $role = 'user'){
    echo "<p>$fName, $lName,  роль - $role</p>";
}
showUserInfo ('Коля', 'петров', 'student');
showUserInfo ('Ваня', 'петров');
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo ($fName, $lName, $role = 'user'){
return "$fName, $lName, $role ";
}
 $info = getUserInfo('Иван', 'иванов');
 echo $info;
 echo getUserInfo('иван', 'иванов');
 function squareRect($l, $w){
return $l * $w;
 }
 $s = squareRect(20, 40);
 echo 'Площадь -  ' . $s;
 ?>
 