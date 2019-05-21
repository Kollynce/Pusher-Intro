<form action="/sender" method="POST">
    <input type="text" name="text">
    <input type="submit">
    {{ csrf_field() }}
</form>