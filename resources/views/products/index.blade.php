<h1>כל המוצרים</h1>
<ul>
@foreach ($products as $product)
    <li><a href="{{ url('/products/' . $product->id) }}">{{ $product->name }}</a></li>
@endforeach
</ul>
