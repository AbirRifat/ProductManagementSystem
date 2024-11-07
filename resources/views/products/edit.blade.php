@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Product</h2>
    <form method="POST" action="{{ route('products.update', $product->id) }}" class="mt-4">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name" class="font-weight-bold">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" placeholder="Enter Product Name" required>
        </div>
        
        <div class="form-group">
            <label for="description" class="font-weight-bold">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Description" rows="3">{{ $product->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="price" class="font-weight-bold">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price }}" placeholder="Enter Price" required>
        </div>
        
        <div class="form-group">
            <label for="stock" class="font-weight-bold">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}" placeholder="Enter Stock Quantity">
        </div>
        
        <div class="form-group">
            <label for="image" class="font-weight-bold">Image URL</label>
            <input type="text" name="image" class="form-control" id="image" value="{{ $product->image }}" placeholder="Enter Image URL">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3 ml-2">Cancel</a>
    </form>
</div>
@endsection
