@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add User</h1>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
            <button type="button" class="btn btn-danger" onclick="window.location='{{ url()->previous() }}'">Cancel</button>
        </form>
    </div>
@endsection
