
 @extends('layouts.app')

@section('title', 'Практика 8')

@section('aside')
    @parent
    <p>Дополнительный контент в сайдбаре</p>
@endsection
@section('content')
    <article>
        <h1>Содержимое статьи</h1>
        <p>Это основной текст, который загрузится в тег main макета.</p>
    </article>
    <h4>Задача 8.4  отдельная вставка футера и хедера</h4>
    @include('elems.header')
    @include('elems.footer')
@endsection
