@extends('layouts.front')

@section('container')
<div class="product-in-stock-wrapp">
    <div class="container">
        <br><br>
        <h3 class="">
            Halo, {{ Auth::user()->name }}
        </h3>
        <p>Selamat datang di laman akunmu.</p>
        

        <a href="{{URL::previous()}}" type="button" class="btn btn-default" style="background-color: rgb(0, 128, 0); color:whitesmoke">Kembali Berbelanja</a><br><br>
        <h4>PROFIL</h4>
        <a href="{{url('/edityourprofile')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill text-info" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
              </svg>
            <span class="blog-title">Edit Profilmu</span>
        </a><br><br>
       
        <table class="table table-bordered">
            <tr>
                <td style="width:25%"><strong>Nama</strong></td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td style="width:25%"><strong>Email</strong></td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td style="width:25%"><strong>Nomor HP</strong></td>
                <td>{{ Auth::user()->ponsel_user ?? '-' }} </td>
            </tr>
            <tr>
                <td style="width:25%"><strong>Alamat</strong></td>
                <td>{{ Auth::user()->alamat_user ?? '-' }} </td>
            </tr>
            <tr>
                <td style="width:25%"><strong>Tanggal terdaftar</strong></td>
                <td> {{ date('d M Y, H:i:s', strtotime(Auth::user()->created_at)) ?? '-' }} </td>
            </tr>
            <tr>
                <td style="width:25%"><strong>Tanggal terakhir diedit</strong></td>
                <td> {{ date('d M Y, H:i:s', strtotime(Auth::user()->updated_at)) ?? '-' }} </td>
            </tr>
        </table>
        <br><br>
        <h4>RECORD</h4>
        <a href="{{url('/seeyourorder')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table text-success" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
              </svg>
            <span class="blog-title">Lihat Pemesanan</span>
        </a><br>
        <a href="{{url('/seeyourpayment')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table text-danger" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
              </svg>
            <span class="blog-title">Lihat Pembayaran</span>
        </a>
        <br><br><br><br>
    </div>
</div>
@endsection

