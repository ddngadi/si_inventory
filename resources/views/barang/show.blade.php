@extends('layouts.layouts')

@section('content')
    <div class="container">
        <h1>Barang Detail</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $barang->id }}</td>
            </tr>
            <tr>
                <th>Merk</th>
                <td>{{ $barang->merk }}</td>
            </tr>
            <tr>
                <th>Seri</th>
                <td>{{ $barang->seri }}</td>
            </tr>
            <tr>
                <th>Spesifikasi</th>
                <td>{{ $barang->spesifikasi }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $barang->stok }}</td>
            </tr>
            <tr>
                <th>Kategori_id</th>
                <td>
                    <a href="{{ route('kategori.show', $barang->kategori->id) }}">
                        {{ $barang->kategori->id }} 
                    </a>
                </td>
            </tr>
        </table>

        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
