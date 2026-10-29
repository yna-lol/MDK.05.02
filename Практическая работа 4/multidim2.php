<h1>Многомерные массивы</h1>
<h2>Задание 1</h2>
<?php
$numbers = [
    [10, 20 , 30, 40],
    [50, 60, 70, 80],
    [90, 100, 110, 120],
];
echo "<table border = '1'  cellpadding = '5' style='border-collapse: collapse;'>";
foreach($numbers as $row){
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>Задание 2</h2>
<?php
$table = [];
for ($i = 0; $i < 10; $i++){
    $num = 10 + $j * 10; $j++; 
    if ($num <= 99) {
        $table[$i][$j] = $num * $num;
    } else {
        $table[$i][$j] = '';
    }
}
echo "<table border = '1'  cellpadding = '5' style='border-collapse: collapse;'>";
foreach($numbers as $row){
        echo "<tr>";
            foreach ($row as $cell) {
    echo "<td style='width: 40px; height: 40px;'>" .$cell . "</td>";
            }
            echo "</tr>";
}
echo "</table>";
?>
<h3>Здание 3</h3>
<?php
$numbers = [
    [15, 3, 22, 8],
    [42, 7, 1, 19],
    [5, 33, 12, 14],
    [9, 25, 31, 4],
    [11, 2, 18, 20]
];
$max = $numbers[0][0];
$min = $numbers[0][0];
$maxRow = 0; $maxCol = 0;
$minRow = 0; $minCol = 0;
for ($i = 0; $i < count ($numbers); $i++){
    for ($j = 0; $j < count($numbers[$i]); $j++){
        if ($numbers[$i][$j] > $max){
            $max =  $numbers[$i][$j];
            $maxRow = $i;
            $maxCol = $j;
        }

    } 
}
?>
<h2>Задание 4</h2>
<?php
$n = 5;
$a = [];
for ($i = 0; $i < $n; $i++){
    for ($j  = 0; $j < $n; $j++){
        $a[$i][$j] = ($i - $j);
    }
}
for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $n; $j++){
        echo $a[$i][$j] . "";
    }
    echo "<br>";
}
?>
<h2>Задание 5</h2>
<?php
$shop = [
    "Одежда" => [
        "Футболка" => "Nike",
        "Куртка" => "Adidas"
    ],
    "Обувь" => [
"Кроссовки"  =>  "Puma",
"Ботинки" => "Nike"
    ],
    "Аксессуары" => [],
    "Инвентарь" => []
];
foreach ($shop as $category => $products){
    echo "<h3>$category</h3>";
    if (empty($products)){
        echo "Здесь пока нет товаров";
    }else{
        foreach ($products as $name => $brand){
            echo "$name - $brand<br>";
        }
    }
}
?>
<h2>Задание 6</h2>
<?php
$shop = [
    "Одежда" => [
        "Футболка" => "Nike",
        "Куртка" => "Adidas"
    ],
    "Обувь" => [
"Кроссовки"  =>  "Puma"
    ],
    "Аксессуары" => [
        "Рюкзак" => "Nike"
    ],
    "Инвентарь" => [
        "Мяч" => "Adidas"
    ]
];
$shop = [ "Электроника"];
print_r($shop);
?>
<h2>Задание 7</h2>
<?php
$shop = [
    "Одежда" => [
        "Футболка" => "Nike",
        "Куртка" => "Adidas"
    ],
    "Обувь" => [
"Кроссовки"  =>  "Puma"
    ],
    "Аксессуары" => [
        "Рюкзак" => "Nike"
    ],
    "Инвентарь" => [
        "Мяч" => "Adidas"
    ],
    "Электроника" => []
];
$newProduct = [
    "Ракетка" => "Wilson",
    "Гантели" => "Adidas"
];
foreach ($newProduct as $name => $brand){
    $shop["Электроника"][$name] = $brand;
}
print_r($shop);
?>
<h2>Задание 8</h2>
<?php
$shop = [
    "Одежда" => [
        "Футболка" => "Nike",
        "Куртка" => "Adidas"
    ],
    "Обувь" => [
"Кроссовки"  =>  "Puma"
    ],
    "Аксессуары" => [],
    "Инвентарь" => []
];
    $shop["Электроника"] = []; 
$products = [
    "Наушники" => "Sony",
    "Часы" => "Apple"
]; 
if (isset($shop("Электроника"))) {
    foreach ($products as $name => $brand) {
        $shop["Электроника"][$name] = $brand;
    }
}else{
    $shop["Электроника"] = $products;
}
print_r($shop);
?>




