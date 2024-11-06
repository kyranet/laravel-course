<div>
    <h1>{{ $product->getName() }}</h1>
    <p>{{ $product->getDescription() }}</p>
    <p>{{ $product->getPrice() }}</p>

    <a href="{{route('products.index')}}">
        <button>Volver</button>
    </a>
</div>
