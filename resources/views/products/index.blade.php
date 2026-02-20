@extends('layouts.app')

@section('content')

<h2>Products</h2>

<ul>
@foreach($products as $product)
    <li>
        <a href="/products/{{ $product['id'] }}">
            {{ $product['name'] }} - ${{ $product['price'] }}
        </a>
    </li>
@endforeach
</ul>

@endsection
