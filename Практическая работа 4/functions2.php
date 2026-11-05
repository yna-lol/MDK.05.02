<h1>задание 1</h1>
<?php
function getCircmference($radis){
    return 2 * pi() * $radis;
}
$radis =5;
$lenght = getCircmference($radis);
echo 'длина окружности - ' . round($length, 2);
?>
