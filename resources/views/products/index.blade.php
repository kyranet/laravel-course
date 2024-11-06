<h1>Lista de Productos:</h1>
<ul>
    @foreach ($products as $product)
    <li>{{ $product->getName() }} <strong>{{ $product->getCategoryName() }}</strong> - {{ $product->getCurrencyPrice() }}</li>
    @endforeach
</ul>
