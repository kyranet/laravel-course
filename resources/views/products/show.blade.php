<div>
    <h1>{{ $product->getName() }}</h1>
    <p>{{ $product->getDescription() }}</p>
    <p>{{ $product->getCategoryName() }}</p>
    <p>{{ $product->getCurrencyPrice() }}</p>

    <h2>Etiquetas</h2>
    <ul>
        @foreach ($product->tags as $tag)
        <li>{{ $tag->getName() }}</li>
        @endforeach
    </ul>


    <a href="{{route('products.index')}}">
        <button>Volver</button>
    </a>
</div>
