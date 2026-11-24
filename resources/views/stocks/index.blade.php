@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Stocks</h1>
            <a href="{{ route('stocks.create') }}" class="btn btn-primary">+ Add Stock</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($stocks as $stock)
                    <tr>
                        <td><strong>{{ $stock->product->name }}</strong></td>
                        <td><span class="badge">{{ strtoupper($stock->type) }}</span></td>
                        <td>{{ $stock->quantity }}</td>
                        <td>
                            <div class="action-group">
                                <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-outline">Edit</a>
                                <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="margin:0;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center; color: #64748b; padding: 24px;">Belum ada data stok.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection