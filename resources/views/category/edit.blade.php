@extends('layout.be.template')
@section('title', 'Edit kategori ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-30">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Edit Data kategori</strong>
                    </div>
                    <div class="card-body">


                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Nama :</strong>
                                        <input type="text" name="name" class="form-control" placeholder="name"
                                            value="{{ $category->name }}">

                                        <input type="submit" value="Simpan" class="btn btn-primary"
                                            style="margin-right: 10px">
                                        <a href="{{ route('category.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
