@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <form method="GET" action="{{ route('products.index') }}" class="form-inline">
        <div class="input-group">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search by ID/description">
            <button type="submit" class="btn btn-primary btn-sm">Search</button>
        </div>
    </form>
    <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th style="width: 20%">Product ID</a></th>
                <th style="width: 40%"><a href="{{ route('products.index', ['sort_by' => 'name', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                <th style="width: 20%"><a href="{{ route('products.index', ['sort_by' => 'price', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">Price</a></th>
                <th style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline" onsubmit="return confirmDelete();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $products->links() }}

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }
</script>
@endsection
