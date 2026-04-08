<!DOCTYPE html>
<html>
<head>
    <title>Мое представление</title>
</head>
<body>
 @extends('layouts.app')

@section('title', 'Практика 8')

@section('aside')
    @parent
    <p>Дополнительный контент в сайдбаре</p>
@endsection

@section('content')
    <h4>Задача 8.1</h4>
    <p>Контент страницы</p>

    <h4>Задача 8.2</h4>
    <p>Тайтл передан и отображается в заголовке страницы.</p>

    <h4>Задача 8.3</h4>
    <p>Контент добавлен в конец сайдбара.</p>

    <h1>Задача 8.4</h4>
    @include('elems.header')
    @include('elems.footer')
@endsection
</body>
</html>