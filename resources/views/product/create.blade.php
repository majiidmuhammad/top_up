@extends('layouts.index')
@section(section: 'beranda')
@section('judul', 'Tambah Service')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah Product</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('product.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Game</label>
                                    <input type="text" name="nama_game" value="{{ old('nama_game') }}"
                                        class="form-control"
                                        placeholder="Masukkan Nama Game">
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <input type="text" name="product" value="{{ old('product') }}"
                                        class="form-control"
                                        placeholder="Masukkan Product">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" value="{{ old('harga') }}"
                                        class="form-control"
                                        placeholder="Masukkan Harga">
                                </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('product') }}">
                                    <button type="button" class="btn btnsecondary">Kembali</button>
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
@endsection