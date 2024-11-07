@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Create New Product</h2>
    <form method="POST" action="{{ route('products.store') }}" class="mt-4">
        @csrf
        
        <div class="form-group">
            <label for="product_id" class="font-weight-bold">Product ID</label>
            <input type="text" name="product_id" class="form-control" id="product_id" placeholder="Enter Product ID" required>
            <small class="form-text text-muted">Unique identifier for the product.</small>
        </div>
        
        <div class="form-group">
            <label for="name" class="font-weight-bold">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" required>
            <small class="form-text text-muted">Enter the name of the product.</small>
        </div>
        
        <div class="form-group">
            <label for="description" class="font-weight-bold">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Description" rows="3"></textarea>
            <small class="form-text text-muted">Provide a brief description of the product.</small>
        </div>
        
        <div class="form-group">
            <label for="price" class="font-weight-bold">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="Enter Price" required>
            <small class="form-text text-muted">Enter the price of the product in USD.</small>
        </div>
        
        <div class="form-group">
            <label for="stock" class="font-weight-bold">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Stock Quantity">
            <small class="form-text text-muted">Enter the available stock quantity.</small>
        </div>
        
        <div class="form-group">
            <label for="image" class="font-weight-bold">Image URL</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Enter Image URL">
            <small class="form-text text-muted">Provide a URL for the product image.</small>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Product</button>
    </form>
</div>
@endsection