<h1>Ассоционтивные Массивы</h1>
<h1>Задание 1</h1>
<?php
$arr = [
    "monday" => "понедельник",
    "tuesday" => "вторник",
    "wensday" => "среда",
    "thursday" =>"четверг",
    "friday" => "пятница",
    "saturday" => "суббота",
    "sunday" => "воскресенье",
    "january" => "январь",
    "february" => "февраль",
    "march" => "март"
];
foreach ($arr as $key => $vale) {
    echo "$key - $vale<br>";
}
?>
<h2>Задание 2</h2>
<?php
$arr = [
     "monday" => "понедельник",
    "friday" => "пятница"
    ];
$word = "monday";
if (isset($arr[$word])) {
    echo $word . " - " . $arr[$word];
    } else {
        echo "В словаре нет такого слова";
    }
    ?>
    <h3>Задание 3</h3>
    <?php
    $arr = [
        "monday" => "понедельник",
        "friday" => "пятница"
    ]; 
    $word = "понедельник";
    if (isset($arr[$word])) {
        echo "$word - " . $arr[$word];
    } elseif (in_array($word , $arr)) {
        echo "$word - " . array_search($word, $arr);
    } else {
        echo "В словаре нет такого слова";
    }
    ?>
    <h4>Задание 4</h4>
    <form>
<input type="text">
<input name="word">
<input min="0">
<input type="submit" value="Введите слово">
</form>
<?php
 $arr = [
        "monday" => "понедельник",
        "friday" => "пятница"
 ];
 $word = $_GET["word"] ?? "";
 if (isset($arr["$word"])) {
    echo $arr[$word];
 } else {
    echo "В словаре нет такого слова";
 }
?>
<h5>Задание 5</h5>
<?php
$str = "banana";
$arr = [];
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (isset($arr[$char])) {
        $arr[$char]++;
    } else {
        $arr[$char] = 1;
    }
    }
foreach ($arr as $key => $vale) {
    echo "'$key' => $vale<br>";
}
?>
<h6>Задание 6</h6>
<?php
$arr =[
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wensday' => 'среда',
    'thursday' =>'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота',
    'sunday' => 'воскресенье',
];
$result = [];
foreach ($arr as $key => $vale) {
    $result[$vale] = $key;
}
print_r($result);
?>
<h7>Задание 7</h7>
<?php
$arr = ['кот', 'дом', 'лес', 'слон', 'мышь'];
$result = [];
foreach ($arr as $word) {
    $len = strlen($word);
    $result[$len][] = $word;
}
foreach ($result as $key => $words) {
    echo $key . ' => ';
    foreach ($word as $word){
        echo $word . ' ';
    }
    echo '<br>';
}
?>