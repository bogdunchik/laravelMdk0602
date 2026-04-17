<form action="/pr16/form" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="имя">
    <input type="text" name="age" value="{{ old('age') }}" placeholder="скока лет">
    <input type="submit" value="отправить">
</form>