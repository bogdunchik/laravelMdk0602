<form action="/test/result" method="POST">
    {{ csrf_field() }}
    <input type="number" name="a" placeholder="Число A">
    <input type="number" name="b" placeholder="Число B">
    <input type="submit" value="Сложить">
</form>