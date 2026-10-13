<h1>Оператор выбора -  задачи</h1>
<h1>Задача 1</h1>
<form>
<input type="number">
<input name="didit">
<input min="0">
<input type="submit" value="Отправить запрос">
</form>
<?php
if (isset($_POST['digit']))
    $digit = (int)$_POST['digit'];
switch($digit) {
    case 0:
        echo "n = zero";
break;
case 1:
    echo "n = one"; 
    case 2:
        echo  "n = two";
        break;
        case 3:
            echo "n = three";
            break;
            case 4:
                echo "n = four";
                break;
                case 5:
                    echo "n = five";
                    break;
                    case 6:
                        echo "n = six";
                        case 7:
                            echo "n = seven";
                            break;
                            case 8:
                                echo "n = eight";
                                break;
                                case 9: 
                                    echo "n = nine";
                                    break;
                                    default:
                                    echo "Неверная цифра";
} 

?>
<h1>задание 2</h1>
<input type
<?php 
$month = 1;
switch($month) {
    case 1:
        echo "1 января - Новый год, 7 января - Рождество";
        break;
        case 2:
            echo "23 февраля - день защитника отечества";
            break;
            case 3: 
                echo "8 марта - Международный женский день";
                break;
                case 4;
                echo "12 апреля - день космонавтики";
                break;
                case 5:
                    echo "1 мая - Праздник весны и труда";
                    break;
                    case 6:
                        echo "12 июня - День Росии";
                        break;
                        case 7:
                            echo "8 июля - день семьи";
                            break;
                            case 8:
                                echo "22 августа - День государственного флага России";
                                break;
                                case 9:
                                    echo "1 сентября - День знаний";
                                    break;
                                    case 10:
                                        echo "5 октября - День учителя";
                                        break;
                                        case 11:
                                            echo "4 ноября - День народного единства";
                                            break;
                                            case 12:
                                                echo "31 декабря - Новый год";
                                                break;
                                                default:
                                                echo "В это месяце нет основных праздников";               
}
?>
<h1>Задание 3</h1>
<?php
$number = 7;
$lastDigit = $number % 10;
$squareLast = ($lastDigit * $lastDigit) % 10;
switch ($squareLast){
    case 0:
        echo "Последняя цифра квадрата: 0";
        break;
        case 1:
            echo "Последняя цифра квадрата: 1";
            break;
            case 2:
                echo "Последняя цифра квадрата: 2";
                break;
                case 3:
                    echo "Последняя цифра квадрата: 3";
                    break;
                    case 4:
                        echo "Последняя цифра квадрата: 4";
                        break;
                        case 5:
                            echo "Последняя цифра квадрата: 5";
                            break; 
                            case 6:
                                echo "Последняя цифра квадрата: 6";
                                break;
                                case 7:
                                    echo "Последняя цифра квадрата: 7";
                                    break;
                                    case 8:
                                        echo "Последняя цифра квадрата: 8";
                                        break;
                                        case 9:
                                            echo "Последняя цифра квадрата: 9";
                                            break; 
                                            default:
                                            echo "Последняя цифра квадрата: . $squareLast"; 
} 
?> 
<h1>Задание 4</h1>
<?php
$k = 22;
$lastDigit = $k % 10;
$tens = intdiv($k, 10);
$word = "лет";
switch ($tens) {
    case 0:
    echo "год";
        break;
        case 1 : 
echo "год";
break; 
case 1 :
    echo "год";
    break;
    case 2:
        echo "год";
        break;
        case 3:
            echo "год";
            break; 
            case 4:
                echo "Год";
                break;
                case 5:
                    echo "лет";
                    break;
                    case 6:
                        echo "лет";
                        break;
                        case 7:
                            echo "лет";
                            break;
                            case 8:
                                echo "лет";
                                break;
                                case 9:
                                echo "лет";
                                break;
}  
 ?>
<h1>Задание 5</h1>
<?php
$unit = 1;
$m = 5;
switch ($unit) {
case 1: 
    $kg =  $m;
    break;
    case 2:
        $kg = $m / 10000;
        break;
        case 3:
            $kg = $m / 1000;
            break;
            case 4:
                $kg = $m * 1000;
                break;
            case 5:
                $kg = $m * 1000;
                break;
                default:
                echo "Неверная единица измерения";
}
if (isset($kg)){
    echo "результат: $kg кг";
}
?>
