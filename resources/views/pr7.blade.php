<!DOCTYPE html>
<html>
<head>
    <title>Мое представление</title>
</head>
<body>
    <ul>
        @foreach($numbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
    <h4>Задача 7.2</h4>
    <ul>
        @foreach($numbers as $number)
            <li>{{ $number * $number }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.3</h4>
    <ul>
        @foreach($numbers as $number)
            <li>{{ sqrt($number) }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.4</h4>
    <ul>
        @foreach($strings as $key => $string)
            <li>{{ $key }}: {{ $string }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.5</h4>
    <ul>
        @foreach($strings as $key => $string)
            <li>{{ $key + 1 }}: {{ $string }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.6</h4>
    <ul>
        @foreach($numbers as $number)
            @if($number % 2 == 0)
                <li>{{ $number }}</li>
            @endif
        @endforeach
    </ul>

    <h4>Задача 7.7</h4>
    @if(is_array($data))
        <ul>
            @foreach($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $data }}</p>
    @endif

    <h4>Задача 7.8</h4>
    <table border="1">
        @for($i = 0; $i < 5; $i++)
            <tr>
                @for($j = 0; $j < 5; $j++)
                    <td>{{ $numbers[$i * 5 + $j] }}</td>
                @endfor
            </tr>
        @endfor
    </table>

    <h4>Задача 7.9</h4>
    <ul>
        @foreach($employees as $employee)
            <li>{{ $employee['name'] }} {{ $employee['surname'] }} - {{ $employee['salary'] }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.10</h4>
    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>ЗП</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Задача 7.11</h4>
    <ul>
        @foreach($strings as $string)
            <li>{{ $loop->index }}: {{ $string }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.12</h4>
    <ul>
        @foreach($strings as $string)
            <li>{{ $loop->iteration }}: {{ $string }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.13</h4>
    <ul>
        @foreach($strings as $string)
            <li class="@if($loop->first) first @elseif($loop->last) last @endif">{{ $string }}</li>
        @endforeach
    </ul>

    <h4>Задача 7.14</h4>
    @foreach($numbers as $number)
        @if($loop->remaining <= 2)
            <i>{{ $number }}</i>
        @else
            <b>{{ $number }}</b>
        @endif
    @endforeach
</body>
</html>