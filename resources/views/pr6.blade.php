<!DOCTYPE html>
<html>
<head>
    <title>Мое представление</title>
</head>
<body>
    @if($dayNumber == 7)
        <p>Воскресенье</p>
    @endif

    <h4>Задача 6.2</h4>
    @if($dayNumber == 6 || $dayNumber == 7)
        <p>Выходной день</p>
    @endif

    <h4>Задача 6.3</h4>
    @if($dayNumber == 6 || $dayNumber == 7)
        <p>Выходной день</p>
    @else
        <p>Рабочий день</p>
    @endif

    <h4>Задача 6.4</h4>
    @if($monthNumber >= 3 && $monthNumber <= 5)
        <p>Весна</p>
    @elseif($monthNumber >= 6 && $monthNumber <= 8)
        <p>Лето</p>
    @elseif($monthNumber >= 9 && $monthNumber <= 11)
        <p>Осень</p>
    @elseif($monthNumber == 12 || $monthNumber <= 2)
        <p>Зима</p>
    @else
        <p>Некорректный номер месяца</p>
    @endif

    <h4>Задача 6.5</h4>
    @unless($age >= 18)
        <p>маленький еще</p>
    @endunless

    <h4>Задача 6.6</h4>
    @if(count($numbers) > 0)
        <p>Сумма: {{ array_sum($numbers) }}</p>
    @else
        <p>маасссив пустой :.</p>
    @endif
</body>
</html>