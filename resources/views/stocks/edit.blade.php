@extends('layout')

@section('content')
    <div class="card form-card">
        <div class="card-header">
            <h1>Edit Stock</h1>
        </div>

        <form method="POST" action="{{ route('stocks.update', $stock->id) }}">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Product</label>
                <select name="id_products" class="form-control" required>
                    @foreach ($products as $p)
                        <option value="{{ $p->id }}" {{ $stock->id_products == $p->id ? 'selected' : '' }}>
                            {{ $p->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control" required>
                    <option value="masuk" {{ $stock->type == 'masuk' ? 'selected' : '' }}>masuk</option>
                    <option value="keluar" {{ $stock->type == 'keluar' ? 'selected' : '' }}>keluar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="quantity" value="{{ $stock->quantity }}" class="form-control" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('stocks.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection