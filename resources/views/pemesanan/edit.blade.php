@extends('layout.be.template')
@section('title', 'Edit pemesanan ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-30">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Edit Data pemesanan</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Nama Customer:</strong>
                                        <input type="text" name="nama_customer" class="form-control" placeholder="nama"
                                            value="{{ $pemesanan->nama_customer }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Produk:</strong>
                                        <select name="produk" class="form-control" id="">
                                            <option disabled value="">Pilih Produk</option>
                                            @foreach ($data_produkk as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ $pemesanan->produkk->id == $row->id ? 'selected' : '' }}>
                                                    {{ $row->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>jumlah:</strong>
                                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah"
                                            value="{{ $pemesanan->jumlah }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Harga:</strong>
                                    <input type="text" name="harga" class="form-control" placeholder="Harga"
                                        value="{{ $pemesanan->harga }}">
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
