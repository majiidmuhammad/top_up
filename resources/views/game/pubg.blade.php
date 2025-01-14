
@extends('game.index')
@section('judul')
<title>{{$judul}} | Express Topup</title>
@endsection
@section('content')
<div class="container">
    <div class="d-flex align-items-center mb-5 gap-3">
        <img src="../assets/img/card banner/{{$judul}}.png" alt="">
        <h1 class="fs-1">PUBG Mobile</h1>
    </div>
    <form role="form" method="POST" action="{{ route('buyPubg') }}">
        @csrf
        <div>
            <label for="akun_game">Masukkan ID pemain anda</label>
            <input type="text" id="akun_game" name="akun_game" placeholder="Masukkan ID pemain anda 'user ID'">
        </div>
    
        <div>
            <label>2. Pilih Pembayaran</label>
            <div class="payment-grid">
                <label class="payment-option disabled">
                    <!-- Radio button disembunyikan -->
                    <input type="radio" name="payment" value="dana" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/dana.jpg" alt="DANA">
                        <span>DANA</span>
                    </div>
                </label>
        
                <label class="payment-option disabled">
                    <input type="radio" name="payment" value="bca" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/bca.jpg" alt="BCA">
                        <span>BCA</span>
                    </div>
                </label>
        
                <label class="payment-option disabled">
                    <input type="radio" name="payment" value="bri" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/bri.jpg" alt="BRI">
                        <span>BRI</span>
                    </div>
                </label>
        
                <label class="payment-option disabled">
                    <input type="radio" name="payment" value="gopay" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/gopay.jpg" alt="GoPay">
                        <span>GoPay</span>
                    </div>
                </label>
        
                <label class="payment-option disabled">
                    <input type="radio" name="payment" value="paypal" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/paypal.jpg" alt="PayPal">
                        <span>PayPal</span>
                    </div>
                </label>
        
                <label class="payment-option">
                    <input type="radio" name="payment" value="qris" class="payment-radio">
                    <div class="payment-content">
                        <img src="../assets/pembayaran/qris.jpg" alt="QRIS">
                        <span>QRIS</span>
                    </div>
                </label>
            </div>
        </div>
    
        <div class="coin-grid">
            @foreach ($coin as $coins)
            <label class="coin-card">
                <input type="radio" name="coin" value="{{ $coins->product }}" class="coin-radio"> 
                <div class="coin-content">
                    {{$coins->product}}<br>Rp.{{ number_format($coins->harga, 0, ',', '.') }}
                </div>
            </label>
            @endforeach
        </div>
    
        <div>
            <label for="email">Masukkan Email Anda</label>
            <input type="text" id="email" name="email" placeholder="Masukkan Alamat Email Anda">
        </div>
    
        <div>
            <label for="no-telp">Masukkan nomor telepon</label>
            <input type="text" id="telp" name="telp" placeholder="Masukkan nomor telepon (08.....) Anda">
        </div>
    
        <div class="actions">
            <button type="submit">Beli Sekarang</button>
        </div>
    </form>
</div>

@endsection