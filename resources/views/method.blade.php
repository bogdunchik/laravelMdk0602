<h2>Давайте узнаем сумму этих чисел</h2>
<p><i>введите два числа:</i></p>
<form method="POST" action="/method">
    {{ csrf_field() }}
    <input type="number" name="num1" placeholder="Число 1">
    <input type="number" name="num2" placeholder="Число 2">
    <button type="submit">Отправить</button>
</form>