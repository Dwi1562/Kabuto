@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
            <button type="button" class="btn btn-danger" onclick="window.location='{{ url()->previous() }}'">Cancel</button>
        </form>
    </div>
@endsection