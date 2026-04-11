<!DOCTYPE html>
<html>
<head>
    <title>set</title>
</head>
<body>
     @if($hasTest)
        <p>Значение test: {{ $testValue }}</p>
    @else
        <p>Переменная test не существует.</p>
    @endif
</body>
</html>