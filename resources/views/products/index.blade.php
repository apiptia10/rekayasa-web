@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $item)
                    <tr>
                        <td><strong>{{ $item->name }}</strong></td>
                        <td>{{ $item->description }}</td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>
                            <div class="action-group">
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-outline">Edit</a>
                                <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="margin:0;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center; color: #64748b; padding: 24px;">Belum ada data produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection