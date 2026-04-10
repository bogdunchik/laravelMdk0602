<h2>Переданные данные:</h2>
<ul>
@foreach($data as $key => $value)
    <li>{{ $key }}: {{ $value }}</li>
@endforeach
</ul>