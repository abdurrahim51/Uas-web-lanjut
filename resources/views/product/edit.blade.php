@extends('layout.be.template')
@section('title', 'Edit pemesanan ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-30">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Edit Data Produk</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="/images/{{ $product->image }}" width="300px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $product->name }}"
                                            class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Detail:</strong>
                                        <input type="text" name="description" value="{{ $product->description }}"
                                            class="form-control" placeholder="description">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Harga:</strong>
                                        <input type="text" name="price" value="{{ $product->price }}"
                                            class="form-control" placeholder="price">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <strong>stok:</strong>
                                            <input type="text" name="stok" value="{{ $product->stok }}"
                                                class="form-control" placeholder="stok">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <strong>Kategori:</strong>
                                            <select name="category_id" class="form-control" id="">
                                                <option disabled value="">Pilih Kategori</option>
                                                @foreach ($data_category as $row)
                                                    <option value="{{ $row->id }}"
                                                        {{ $product->categor->id == $row->id ? 'selected' : '' }}>
                                                        {{ $row->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <input type="submit" value="Simpan" class="btn btn-primary" style="margin-right: 10px">
                                    <a href="{{ route('pemesanan.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
