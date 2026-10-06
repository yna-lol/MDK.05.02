<h3>Практичекася работа по вложеными циклам</h3>
<p>Задача 1</p>
<?php
echo "<table border ='1' cellpadding='5'>";
for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($j = 1; $j <= 10; $j++){
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<p>задание 2</p>
<?php 
$a = 4;
$b = 3;
for($i = 0; $i < $b; $i++){
    for($j = 0; $j < $a; $j++){
        echo "X";
    }
    echo "<br>";
} 
?>
<p>Задание 3</p>
<?php
echo  "<table style='broder-collapse; text-align; center;'>";
for($i = 1; $i <=10; $i++){
    echo "<tr>";
    for($j = 1; $j <= 10; $j++){
        echo "<td style='border: 1px solid black; width: 30px; height: 30px;'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<p>Задание 4</p>
<?php
echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
echo "<tr><th>Число</th><th>квадрат</th></tr>";
