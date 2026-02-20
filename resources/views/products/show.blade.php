@extends('layouts.app')

@section('content')

@if($product)
    <h2>{{ $product['name'] }}</h2>
    <p>Price: ${{ $product['price'] }}</p>
@else
    <p>Product not found</p>
@endif

@endsection
