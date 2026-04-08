<!DOCTYPE html>
<html>
<head>
    <title>Мое представление</title>
</head>
<body>
    <p>Имя : {{ $name }}</p>
    <p>Фамилия: {{ $surname }}</p>
    <p>{{ $salary }}</p>
    <p class="{{ $cssClass }}">Текст с динамическим классом</p>
    <input value="{{ $value1 }}">
<input value="{{ $value2 }}">
<input value="{{ $value3 }}">
<p style="{{ $cssStyle }}">Текст с красным цветом</p><a href="{{ $href }}">{{ $text }}</a>
<a href="{{ $href }}">{{ $text }}</a>
<p>{{date('d.m.Y')}}</p>
<p>{{ $employee['name'] }}</p>
<p>{{ $employee['age'] }}</p>
<p>{{ $employee['salary'] }}</p>
<p>Количество элементов:/ {{ count($array) }}</p>
<p>{{ $city ?? 'Москва' }}</p>
<p>{{ $location['country'] ?? 'Россия' }}</p>
<p>{{ $location['city'] ?? 'Москва' }}</p>
<p>Дата: {{ $day ?? date('d') }}.{{ $month ?? date('m') }}.{{ $year ?? date('Y') }}</p>
{!! $str !!}
</body>
</html>