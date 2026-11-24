@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Transactions</h1>
            <a href="{{ route('transactions.create') }}" class="btn btn-primary">+ Add Transaction</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Status</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $t)
                    <tr>
                        <td><strong>{{ $t->product->name }}</strong></td>
                        <td>{{ $t->quantity }}</td>
                        <td>
                            <span class="badge">{{ $t->status == 1 ? 'Selesai (1)' : 'Pending (0)' }}</span>
                        </td>
                        <td>
                            <div class="action-group">
                                <a href="{{ route('transactions.edit', $t->id) }}" class="btn btn-outline">Edit</a>
                                <form action="{{ route('transactions.destroy', $t->id) }}" method="POST" style="margin:0;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center; color: #64748b; padding: 24px;">Belum ada data transaksi.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection