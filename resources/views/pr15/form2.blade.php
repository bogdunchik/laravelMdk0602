@isset($err) <p>{{ $err }}</p> @endisset
<form action="/pr15/2" method="POST">
    @csrf
    <input type="text" name="mail" value="{{ old('mail') }}">
    <input type="submit">
</form>