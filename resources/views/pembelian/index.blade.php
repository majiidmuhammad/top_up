@extends('layouts.index')
@section(section: 'beranda')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Pembelian Table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs  opacity-7">
                                        No</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No. Telp</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Game</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Id Game</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Product</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Harga</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $row)
                                    <tr class="text-center">
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $row->email }} </td>
                                        <td> {{ $row->telp }} </td>
                                        <td> {{ $row->akun_game }} </td>
                                        <td> {{ $row->nama_game }} </td>
                                        <td> {{ $row->product }} </td>
                                        <td> {{ $row->harga }} </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection