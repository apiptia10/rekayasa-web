@extends('layout')

@section('content')
    <div class="card form-card">
        <div class="card-header">
            <h1>Add Product</h1>
        </div>

        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('products.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection