<h1>Задание 1</h1>
<?php
$str = "hello ( words)!";
$start = strpos($str, "(");
$end = strpos($str, ")");
$result = substr($str, $start + 1, $end - $start - 1);
echo $result;
?>
<h1>Задание 2</h1>
<?php
$str = "Сегодня холодно.";
$str = rtrim($str, ".");
$words = preg_split('/\s+/u', trim($str));
echo count($words);
?>
<h1>задание 3</h1>
<?php
$str = "анна дом радар кот";
$word = explode(" ",$str);
foreach ($words as $word){
    $first = mb_substr($word, 0, 1);
    $last = mb_substr($word, -1);
    if (mb_strtolower($first) == mb_strtolower($last)){
        echo $word . " ";
    }
}
?>
<h1>Задание 4</h1>
<?php
$str = "привет мир";
$a = mb_str_split($str);
$b = array_unique($a);
echo count($b) . "\n";
foreach ($b as $a){
    echo $a . " ";
}
?>
<h1>Задание 5</h1>
<?php
$str = "Robert likes cats";
$str = mb_substr_count($str, "r");
$str = mb_substr_count($str, "k");
$str = mb_substr_count($str, "t");
echo "буква в: " . $r . "\n";
echo "буква к: " . $k . "\n";
echo "буква т: " . $t;
?>
<h1>Задание 6</h1>
<?php
$str = "Я изучаю программирование на PHP";
$words = explode(" ", $str);
$min = mb_strlen($words[0]);
$max = mb_strlen($words[0]);
foreach($words as $word){
    $lenght = mb_strlen($word);
    if ($lenght < $min){
        $min = $lenght;
    }
    if ($lenght > $max){
        $max = $lenght;
    }
}
echo "Длина коротого слова: " . $min . "\n";
echo "Длина длинного слова: " . $max;
?>
<h1>Задание 7</h1>
<?php
$str = "мамааа пошлаа гулять";
$a = explode(" ",$str);
$max = 0;
foreach ($a as $word){
    $count = mb_substr_count($word, "a");
    if ($count > $max){
        $max = $count;
    }
}
echo $max;
?>
<h1>Задание 8</h1>
<?php
$str = "Привет(удалить) мир";
$start = strpos($str, "(");
$end = strpos($str, ")");
$result = substr($str, 0, $start) . 
substr($str, $end + 1);
echo $result;
?>
