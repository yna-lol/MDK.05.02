<h1>Многомерные массивы</h1>
<h2>Обьявление</h2>
<?php
$student = [['Иванов' , 'Иван'] ,['Петров' , 'петр'] , ['Сидров' , 'Миша']]
?>
<h2>Вывод на экран</h2>
<?php
foreach($student as $student) {
foreach($student as $name) {
echo $name, '';
}
echo '<br>';
}
?>
<h2>Ассоционтивные массивы</h2>
<?php
$student = [['second  name' => 'Иванов', 'first name'=> 'Иван'] , ['second  name' => 'петров' , 'first name' => 'Петр'] , ['second  name' => 'Сидров' , 'first name' => 'Миша']];
?>
<h2>Вывод значения</h2>
<?php
foreach($student as $student) {
echo '<p>' . $student['second name'], '';
echo $student['first name'] . '</p>';
}
?>
<h2>Обращение к элеменету</h2>
<?php
$student[0]['first name'];
?>
<h2>Еще пример массива</h2>
<?php
$college  = [['1V1K - 25' => [['second  name' => 'Иванов', 'first name'=> 'Иван'] , ['second  name' => 'петров' , 'first name' => 'Петр']]] , '1V1K - 25' => [['second  name' => 'Сидров' , 'first name' => 'Вова']]];
?>
<h2>Вывод значения</h2>
<?php
foreach($college as $key => $group) {
echo "<h3>Группа: $key</h3>";
foreach($group as $student){
    echo '<p>' . $student['second name'], '';
echo $student['first name'] . '</p>';
}
}  
?>
