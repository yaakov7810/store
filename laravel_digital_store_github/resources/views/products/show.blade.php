<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
@if ($product->image)
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
@endif
@if ($product->file)
    <p><a href="{{ asset('storage/' . $product->file) }}">הורד את הקובץ</a></p>
@endif
