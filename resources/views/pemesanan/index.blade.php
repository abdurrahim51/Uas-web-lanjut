@extends('layout.be.template')


@section('content')
    <div class="container px-4 mt-4">
        <div class="col-lg-12 margin-canter">
            <div class="text-center">
                <h2>MARKET FRESH</h2>
            </div>
            <a href="{{ route('pemesanan.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
    </div>

    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{     $message }}</p>
        </div>
    @endif --}}

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Produk</th>
            <th>jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($pemesanan as $row)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $row->nama_customer }}</td>
                <td>{{ $row->produkk?->name }}</td>
                <td>{{ $row->jumlah }}</td>
                <td>{{ $row->harga }}</td>

                <td>
                    <form action="{{ route('pemesanan.destroy', $row->id) }}" method="POST">


                        <a class="btn btn-primary" href="{{ route('pemesanan.edit', $row->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
