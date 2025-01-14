@extends('game.index')
@section('content')
<div class="transaction-container">
    <h1 class="transaction-title">Detail Transaksi</h1>
    
    <div class="transaction-info">
        <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
        <p><strong>Nama Product:</strong> {{$transaksi->nama_game}} {{ $transaksi->product }}</p>
        <p><strong>Status Pembayaran:</strong> <span class="status-unpaid">Unpaid</span></p>
        <p><strong>Status Transaksi:</strong> <span class="status-pending">Pending</span></p>
        <p><strong>Waktu Transaksi:</strong> {{ $transaksi->created_at}}</p>
    </div>

    <div class="qrcode-section">
        <h2>QR Code:</h2>
        <div class="qrcode-box">
            <img src="../assets/img/QRIS contoh.png" alt="">
        </div>
        <p class="mb-4">senilai Rp.{{number_format($transaksi->harga, 0, ',', '.')}}</p>
    </div>

    <div class="payment-instructions">
        <h3>Cara Pembayaran:</h3>
        <ol>
            <li>Screenshot QR Code di atas.</li>
            <li>Buka aplikasi e-wallet pilihan Anda (DANA, OVO, GoPay, dll).</li>
            <li>Pilih opsi <strong>Scan QR Code</strong>.</li>
            <li>Unggah gambar QR Code hasil screenshot, atau scan langsung dari layar.</li>
            <li>Selesaikan pembayaran sesuai jumlah yang tertera.</li>
            <li>Diamond akan otomatis masuk ke akun game Anda setelah pembayaran berhasil.</li>
        </ol>
    </div>

    <div class="back-button-container">
        <a href="/" class="back-button">Kembali ke Beranda</a>
    </div>
</div>
@endsection