<!DOCTYPE html>
<html>
<head>
    <title>@section('title')</title>
</head>
<body>
      <header><h1>хедер</h1>@include('elems.header')</header>
    <aside>
    @section('aside')
        <p>Стандартный сайдбар</p>
</aside>
    <main><h1>main</h1>@yield('content')</main>
  
<footer><h1>ft</h1>@include('elems.footer')</footer>
</body>
</html>