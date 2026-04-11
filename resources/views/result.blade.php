<h4><i>Отправленные</i> данные:</h4>
@if(isset($data))
    <ul>
    @foreach($data['inputs'] ?? [] as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>
@endif

@if(isset($sum))
    <h2>Сумма чисел: {{ $sum }}</h2>
@endif

@if(isset($square))
    <p>Квадрат числа: {{ $square }}</p>
@endif