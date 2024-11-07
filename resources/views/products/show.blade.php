@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $product->name }}</h1>
    
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="font-weight-bold">Product Details</h2>
            <p class="lead">{{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-primary mt-4">Back to Products</a>
</div>
@endsection
