<form action="/products/create" method="post">
    @csrf
    <input type="text" name="name" required="true">
    <input type="text" name="description">
    <input type="number" name="price" required="true">
    <input type="submit">
</form>
