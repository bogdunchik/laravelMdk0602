<form method="POST" action="/form">
    {{ csrf_field() }}
    <div id="inputs">
        <input type="text" name="inputs[]">
    </div>
    <button type="button" onclick="addInput()">Добавить поле</button>
    <button type="submit">Отправить</button>
</form>
<script>
    function addInput() {
        const div = document.getElementById('inputs');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'inputs[]';
        div.appendChild(input);
    }
</script>