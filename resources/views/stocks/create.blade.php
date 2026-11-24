@extends('layout')

@section('content')
    <div class="card form-card">
        <div class="card-header">
            <h1>Add Stock</h1>
        </div>

        <form method="POST" action="{{ route('stocks.store') }}">
            @csrf
            <div class="form-group">
                <label>Product</label>
                <select name="id_products" class="form-control" required>
                    @foreach ($products as $p)
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control" required>
                    <option value="masuk">masuk</option>
                    <option value="keluar">keluar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('stocks.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection