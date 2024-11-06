<h1>Lista de Productos:</h1>
<ul>
    @foreach ($products as $product)
    <li><a href="{{route('products.show', $product)}}">{{ $product->getName() }}</a> <strong>{{ $product->getCategoryName() }}</strong> - {{ $product->getCurrencyPrice() }}</li>

    @endforeach
</ul>
