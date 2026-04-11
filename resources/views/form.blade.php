<form action="/test/result" method="POST">
    {{ csrf_field() }}
    <input type="number" name="number" value="">
    <input type="submit" value="Отправить">
</form>