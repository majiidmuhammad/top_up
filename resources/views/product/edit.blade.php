@extends('layouts.index')
@section(section: 'beranda')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Product</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card-body">
                            <form action="{{ route('product.update', $edit->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Game</label>
                                    <input type="text" name="nama_game"
                                        value="{{ old('nama_game', $edit->nama_game) }}"
                                        class="form-control"
                                        placeholder="Masukkan Nama Game">
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <input type="text" name="product"
                                        value="{{ old('product', $edit->product) }}"
                                        class="form-control"
                                        placeholder="Masukkan Product">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" value="{{ old('harga', $edit->harga) }}"
                                        class="form-control"
                                        placeholder="Masukkan Kode Service">
                                </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-info">Perbaharui</button>
                                <a href="{{ route('product') }}">
                                    <button type="button" class="btn btn-danger">Kembali</button>
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection