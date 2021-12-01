@extends('layouts.front')

@section('container')
<div class="product-in-stock-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Ketentuan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            Ketentuan
        </h3>
                
        <h4>KETENTUAN PEMESANAN</h4>
        <ul>
            <li>Jika ada <strong>penambahan</strong> pesanan, infokan H-1 maksimal pukul 15.00.</li>
            <li><strong>Pembatalan</strong> H-1 s/d H-3 akan dikenakan charge 50% dari total invoice no.</li>
            <li><strong>Pembatalan/perubahan</strong> pesanan maksimal 1×24 jam sebelum pesanan diambil/dikirim. </li>
            <li>Jika tidak ada <strong>konfirmasi pembatalan </strong>tertulis lewat Whatsapp berarti pesanan akan dibuatkan dan harus dibayar.</li>
            
        </ul>

        <BR></BR>
        <h4>KETENTUAN PEMBAYARAN</h4>
        <ul>
            <li>Pembayaran bisa ditransfer melalui <strong>Rek. BCA 3640902379 </strong>A/N Aida Ayu Muspitasari atau COD</li>
            <li>H-1 harus konfirmasi ke <a href="http://wa.me/6281216855310">Whatsapp ini</a></li>
        </ul>

        <BR></BR>
        <h4>PERLU DIPERHATIKAN</h4>
        <ul>
            <li>Makanan sebaiknya dikonsumsi maksimal 4 jam setelah pengantaran</li>
            <li>Letakkan makanan ditempat sejuk dan jauhi dari sinar matahari langsung </li>
        </ul>
       
        
        <br><br><br><br>
    </div>
</div>
@endsection