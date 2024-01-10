@extends('layout.be.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>MARKET FRESH</h2>
            </div>
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Category</th>
            <th>Aksi</th>

        </tr>
        @foreach ($product as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stok }}</td>
                <td>{{ $product->categor?->name }}</td>

                <td>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
