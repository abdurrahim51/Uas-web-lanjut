@extends('layout.be.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Tambah Pemesanan</h2>
            </div>
        </div>
    </div>
    <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Customer:</strong>
                    <input type="text" name="nama_customer" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <select name="produk" class="form-control" id="">
                        <option value="" disabled selected>Pilih Produk</option>
                        @foreach ($data_produkk as $pemesanan)
                            <option value="{{ $pemesanan->id }}">{{ $pemesanan->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jumlah:</strong>
                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="text" name="harga" class="form-control" placeholder="Harga">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
        </div>

    </form>
@endsection
