<form method="POST" action="/register">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Зарегистрироваться</button>
</form>