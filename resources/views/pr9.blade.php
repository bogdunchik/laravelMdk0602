<!DOCTYPE html>
<html>
<head>
    <title>Мое представление</title>
     <style>
        .first { font-weight: bold; }
        .last { color: red; }
        .active { background: yellow; }
    </style>
</head>
<body>
@foreach($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a><br>
    @endforeach

    <h4>Задача 9.2</h4>
    <ul>
        @foreach($links as $link)
            <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
        @endforeach
    </ul>

    <h4>Задача 9.3</h4>
    <table border="1">
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Задача 9.4</h4>
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

    <h4>Задача 9.5</h4>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $key => $employee)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Задача 9.6</h4>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $key => $employee)
            @if($employee['salary'] > 2000)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['surname'] }}</td>
                    <td>{{ $employee['salary'] }}</td>
                </tr>
            @endif
        @endforeach
    </table>

    <h4>Задача 9.7</h4>
    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $user['banned'] ? 'забанен' : 'активен' }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Задача 9.8</h4>
    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach($users as $user)
            <tr style="color: {{ $user['banned'] ? 'red' : 'green' }}">
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $user['banned'] ? 'забанен' : 'активен' }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Задача 9.9</h4>
    @foreach($strings as $string)
        <input value="{{ $string }}"><br>
    @endforeach

    <h4>Задача 9.10</h4>
    <select>
        @foreach($strings as $string)
            <option>{{ $string }}</option>
        @endforeach
    </select>

    <h4>Задача 9.11</h1>
    <ul>
        @foreach($days as $day)
            <li class="@if($day == $currentDay) active @endif">{{ $day }}</li>
        @endforeach
    </ul>
</body>
</html>