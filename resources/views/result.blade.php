<h4><i>Отправленные</i> данные:</h4>
<ul>
@foreach($data['inputs'] ?? [] as $item)
    <li>{{ $item }}</li>
@endforeach
</ul>

<h2>Сумма чисел<i>из method</i>: {{ $sum }}</h2>

@if(isset($square))
    <p>Квадрат числа: {{ $square }}</p>
@endif

<p>Сумма: {{ $sum }}</p>