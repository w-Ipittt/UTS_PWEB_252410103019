<!-- Well begun is half done. - Aristotle -->
@extends('layouts.app')

@section('title', 'Pengelolaan Menu')

@section('content')
<h2>Pengelolaan Menu</h2>
<p class="muted">Daftar menu beserta harga dan sisa stok.</p>

<div class="table-wrap card">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>
                        <span class="badge {{ $item['status'] === 'Menipis' ? 'warn' : 'ok' }}">
                            {{ $item['status'] }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
