@extends('layout')

@section('content')
    <div class="card form-card">
        <div class="card-header">
            <h1>Edit Transaction</h1>
        </div>

        <form method="POST" action="{{ route('transactions.update', $transaction->id) }}">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Product</label>
                <select name="id_products" class="form-control" required>
                    @foreach ($products as $p)
                        <option value="{{ $p->id }}" {{ $transaction->id_products == $p->id ? 'selected' : '' }}>
                            {{ $p->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="quantity" value="{{ $transaction->quantity }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="1" {{ $transaction->status == 1 ? 'selected' : '' }}>1 - Selesai</option>
                    <option value="0" {{ $transaction->status == 0 ? 'selected' : '' }}>0 - Pending</option>
                </select>
            </div>
            <div class="form-actions">
                <a href="{{ route('transactions.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection