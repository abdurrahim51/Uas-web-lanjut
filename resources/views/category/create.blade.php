@extends('layout.be.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Tambah Kategori</h2>
            </div>

        </div>
    </div>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <input type="submit" value="Simpan" class="btn btn-primary" style="margin-right: 10px">
                <a href="{{ route('category.index') }}" class="btn btn-danger">Batal</a>
            </div>

    </form>
@endsection
