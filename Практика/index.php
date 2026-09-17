
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Изучаем PHP</h1>
    <h2>Вывод на экран</h2>
    <p>Команда echo</p>
    <?php
    echo 'Это PHP'; //Комментарий - Обычный echo
     echo 'Это PHP' /*Коментарий многострочный*/
    ?>
    <P>Сокращенный echo</p>
    <?= 'Еще раз PHP'?>
   <p>Вывод чисел</p>
   <?= 33.3 ?>
   <h2>Переменные</h2>
   <p>Обьявление переменной</p>
   <?php
    $num = 55;
    $n = $num + 33;
 echo "n= $n, num = $num";
 ?> 
 <h2>Арифметиеские операции</h2>
 <p><?= + - * / ** % ?</p>
 <h2>Использование скобок</h2>
 <p>Приоритет операции</p>
 <?= (5 + 5) * 5 ?>
<h2>Пример 2</h2>
<p> (a + b)/c при a=10, b=20, c=15 </p>
<?php
$a = 10;
$b = 20;
$c = 15;
echo "Результат: $res";
?>

</body>
</html>
