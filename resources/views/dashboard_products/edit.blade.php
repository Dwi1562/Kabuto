@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Edit Product</h2>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div>
@endsection
