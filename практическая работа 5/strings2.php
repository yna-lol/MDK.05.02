<h1>Задание 1</h1>
<?php
$str = "hello (my friend)!";
$start = 0;
$end = 0;
for ($i = 0; $i < strlen($str); $i++){
    if ($str[$i] == "("){
        $start = $i;
    }
    if ($str[$i] == ")"){
        $end = $i;
    }
}
for ($i = $start + 1; $i < $end; $i++){
    echo $str[$i];
}
?>
<h1>Задание 2</h2>
<?php
$str = "I love lera very much.";
$count = 0;
for ($i = 0; $i < strlen($str); $i++){
    if ($str[$i] != " " && ($i == 0 || $str[$i - 1] == " ")){
        $count++;
    }
}
echo "Words: " . $count;
?>
<h2>Задание 3</h2>
<?php
$str = "level cat radar dog Anna";
$word = "";
for ($i = 0; $i <= strlen($str); $i++){
    if ($i < strlen($str) && $str[$i] != " "){
        $word .= $str[$i];
    }else{
        if (strlen($word) > 0){
            if ($word[0] == $word[strlen($word) - 1]){
                echo $word . "<br>";
            }
        }
        $word = "";
    }
}
?>
<h2>Задание 4</h2>
<?php
$str = "hello word";
$unique = "";
for ($i = 0; $i < strlen($str); $i++){
    $found = false;
    for ($j = 0; $j < strlen($unique); $j++){
        if ($str[$i] == $unique[$j]){
            $found = true;
        }
    }
    if (!$found){
        $unique .= $str[$i];
    }
}
echo "Different symbols: ". strlen($unique) . "<br>";
echo $unique;
?>
<h2>Задание 5</h2>
<?php
$str = "programming is great";
$r = 0;
$k = 0;
$k = 0;
$t = 0;
for ($i = 0; $i < strlen($str); $i ++){
    if ($str[$i] == "r"){
        $r++;
    }
    if ($str[$i] == "k"){
        $k++;
    }
    if ($str[$i] == "t"){
        $t++;
    }
}
echo "r" . $r . "<br>";
echo "k" . $k . "<br>";
echo "t" . $t . "<br>";
?>
<h2>задание 6</h2>
<?php
function cleanSpaces($str){
    $result = "";
    $space = false;
    for ($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == " "){
            $space = true;
        }else{
            if ($space && strlen($result) > 0){
                $result .= " ";
            }
        $result .= $str[$i];
$space = false;
            }
        }
return $result;
    }
$str = " hello my friend ";
echo cleanSpaces($str);
?>
<h2>Задание 7</h2>
<?php
$str = "I love learning programming";
$word = "";
$min = 1000;
$max = 0;

for ($i = 0; $i <= strlen($str); $i++) {
    if ($i < strlen($str) && $str[$i] != " ") {
        $word .= $str[$i];
    } else {
        $length = strlen($word);

        if ($length > 0) {
            if ($length < $min) {
                $min = $length;
            }

            if ($length > $max) {
                $max = $length;
            }
        }

        $word = "";
    }
}

echo "Shortest word: " . $min . "<br>";
echo "Longest word: " . $max;
?>
<h2>Задание 8</h2>
<?php
$str = "baaaacaaadaaaaa";
$count = 0;
$max = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "a") {
        $count++;

        if ($count > $max) {
            $max = $count;
        }
    } else {
        $count = 0;
    }
}

echo "Longest sequence: " . $max;
?>
<h2>Задание 9</h2>
<?php
$str = "Hello (my friend)!";
$result = "";
$inside = false;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "(") {
        $inside = true;
    } elseif ($str[$i] == ")") {
        $inside = false;
    } elseif (!$inside) {
        $result .= $str[$i];
    }
}

echo $result;
?>