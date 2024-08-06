@extends('admin.layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h2>Product List</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add</a>
        <table class="table mt-3">
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>

                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
