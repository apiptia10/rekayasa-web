@extends('layout')

@section('content')
    <div class="card form-card">
        <div class="card-header">
            <h1>Edit Product</h1>
        </div>

        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="3" class="form-control">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('products.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection