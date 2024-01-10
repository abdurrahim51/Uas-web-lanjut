@extends('layout.be.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Data Product</h2>
            </div>
        </div>
    </div>

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input class="form-control" name="description" placeholder="Detail">
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input class="form-control" name="price" placeholder="Harga">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Stok:</strong>
                        <input class="form-control" name="stok" placeholder="Stok">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <strong>category:</strong>
                            <select name="category_id" class="form-control" id="">
                                <option value="" disabled selected>Pilih Category</option>
                                @foreach ($data_categor as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

    </form>
@endsection
