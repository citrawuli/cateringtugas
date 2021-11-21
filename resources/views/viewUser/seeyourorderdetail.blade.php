@extends('layouts.front')
@section('link')
    <link rel="stylesheet" href="{{ asset('davur/vendor/datatables/css/jquery.dataTables.min.css') }}">
@endsection

@section('container')
<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            <a href="{{url('/seeyourorder')}}">Daftar Pemesanan Anda</a>
                        </li>
                        @foreach ($pemesanan as $pem)
                        <li class="trail-item trail-end active">
                            {{$pem->id_pemesanan}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($pemesanan as $key =>$pem)
            <div class="container">
                <h4>PEMESANAN</h4>

                @if ($pem ->status_pemesanan == '1')
                    Status Pemesanan : <button style="background-color: green"> <strong>MENUNGGU KONFIRMASI</strong></button>
                    <br> 
                    <small>*Mohon menunggu 1x24 jam. Admin kami akan menghubungi Anda untuk melakukan konfirmasi pemesanan pada jam kerja.
                            <br>Kontak kami dengan <a href="{{url('/kontak')}}"> klik di sini</a>.
                            Status pemesanan: 1)Menunggu Konfirmasi, 2)Diterima, 3)Ditolak, 4) Dibatalkan
                    </small>
                {{-- diterima --}}
                @elseif ($pem ->status_pemesanan == '2')
                    Status Pemesanan : <button style="background-color: green"> <strong>DITERIMA</strong></button>
                    <div class="dropdown mb-md-3 mb-2 ml-auto">
                        @if ($pem->status_progress == '1')
                        <div class="btn btn-danger">
                            <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                            <span>BELUM DIPROSES</span>
                        </div>
                        @elseif ($pem->status_progress == '2')
                        <div class="btn btn-warning">
                            <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                            <span>SEDANG DIPROSES</span>
                        </div>
                        @elseif ($pem->status_progress == '3')
                        <div class="btn btn-info">
                            <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                            <span>DALAM PENGIRIMAN</span>
                        </div>
                        @elseif ($pem->status_progress == '4')
                        <div class="btn btn-success">
                            <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                            <span>SELESAI</span>
                        </div>
                        @endif
    
                        <small>*Status progress: 1)Belum Diproses, 2)Sedang Diproses, 3)Dalam Pengiriman, 4)Selesai</small>
                        
                    </div>
                {{-- ditolak --}}
                @elseif ($pem ->status_pemesanan == '3')   
                    Status Pemesanan : <button style="background-color: green"> <strong>DITOLAK</strong></button>
                {{-- dibatalkan --}}
                @elseif ($pem ->status_pemesanan == '4') 
                    Status Pemesanan : <button style="background-color: green"> <strong>DIBATALKAN OLEH ANDA</strong></button>
                @endif
                
                

                <br><br>
                <a href="{{url('/edityourdetailorder/'.$pem->id_pemesanan)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-info" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <span class="blog-title">Edit Pemesanan</span>
                </a>
                @if ($pem ->status_pemesanan == '1')
                    <a href="{{url('/cancelyourorder'.$pem->id_pemesanan)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle text-danger" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                        <span class="blog-title">Batalkan Pemesanan</span>
                    </a>

                @endif

                <table class="table table-bordered">
                    <tr>
                        <td style="width:25%"><strong> Nama Pemesan:</strong></td>
                        <td>{{$pem->nama_lengkap_pembeli}}</td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Nomor Telepon</strong></td>
                        <td>{{$pem->no_hp_pembeli}}</td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Untuk tanggal</strong></td>
                        <td>{{ date('d M Y', strtotime($pem->untuk_tanggal)) ?? '-' }} </td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Untuk jam</strong></td>
                        <td>{{$pem->untuk_jam ?? '-'}} </td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Alamat pengantaran:</strong></td>
                        <td> {{$pem->alamat_lengkap_pembeli ?? '-'}} </td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Keterangan</strong></td>
                        <td> {{$pem->keterangan ?? '-'}} </td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Total transaksi</strong></td>
                        <td>  @currency($pem->total_transaksi)</td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Pengambilan</strong></td>
                        <td> <i class="icon fa fa-truck" aria-hidden="true"></i>
                            @if ($pem ->pengambilan == '1')
                                <a href=""></i>Diambil sendiri</a>
                            @elseif ($pem ->pengambilan == '2')
                                <a href=""></i>Dikirim Go-Car</a>
                            @endif
                        </td>
                    </tr>
                </table>

                <br>
                <h4>PRODUK YANG DIPESAN</h4>
                <div class="table-responsive ">
                    <table class="table items-table">
                        <tr>
                            <th class="my-0 text-black font-w500 fs-20">Item</th>
                            <th style="width:10%;" class="my-0 text-black font-w500 fs-20">Qty</th>
                            <th style="width:20%;" class="my-0 text-black font-w500 fs-20">Harga</th>
                            <th class="my-0 text-black font-w500 fs-20">Sub Total</th>
                        </tr>
                        @foreach ($pem->products as $det_pem  )
                        <tr>
                            <td>
                                <div >
                                    @foreach ($galpro->slice(0, 1) as $gal)
                                        @if ($det_pem->id == $gal->id_produk)
                                            <img class="m" width="85" src="{{ asset($gal->foto) }}" alt="">
                                        @endif
                                    @endforeach

                                    <div class="media-body">
                                        @foreach ($category as $cat)
                                            @if ($det_pem->id_kategori == $cat->id)
                                            <small class="mt-0 mb-1 font-w500"><span class="text-primary" href="javascript:void(0);">
                                                {{$cat->nama_kategori}}</span>
                                            </small>
                                            @endif
                                        @endforeach
                                        <h5 class="mt-0 mb-2 mb-4"><span class="text-black" href="{!! url('/ecom-product-detail'); !!}">{{$det_pem->nama_produk}}</span></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h4 class="my-0 text-secondary font-w600">{{ $det_pem->pivot->kuantitas ?: 'null' }}</h4>
                            </td>
                            <td>
                                @if ($det_pem->harga_produk != null)
                                <h4 class="my-0 text-secondary font-w600">@currency($det_pem->harga_produk)</h4>
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                @if ($det_pem->pivot->sub_total != null)
                                <h4 class="my-0 text-secondary font-w600">@currency($det_pem->pivot->sub_total)</h4>
                                @else
                                -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                        <tfoot>
                            <tr>
                                <td colspan="3" style="text-align:right;"> Total:</td>
                                <td><h4 class="my-0 text-secondary font-w600">@currency($pem->total_transaksi)</h4></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <br>
                <h4>PEMBAYARAN {{$pem->id_pemesanan}}</h4>
                <br>
                <a href="{{url('/addpayment/'.$pem->id_pemesanan)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square text-success" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg> Tambah Pembayaran
                </a>
                

                <table class="table table-bordered">
                    <tr>
                        <td style="width:25%"><strong> Total Harus Bayar:</strong></td>
                        <td> @currency($pem->total_transaksi)</td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Jumlah Sudah Bayar (Diverifikasi) </strong></td>
                        <td>@currency($jumlahSudahBayar)</td>
                    </tr>
                    <tr>
                        <td style="width:25%"><strong>Status Lunas</strong></td>
                        <td>
                            @if ($pem->total_transaksi > $jumlahSudahBayar)
                                Tagihan Bayar : @currency($pem->total_transaksi-$jumlahSudahBayar)
                                <br><br><h1 style="background-color: rgb(224, 255, 180)" align="center">BELUM LUNAS</h1>
                            @else
                                {{-- <br>Deposit Bayar : @currency(abs($jumlahSudahBayar-$pemesanan->total_transaksi)) --}}
                                <br><h1 style="background-color: rgb(194, 255, 199)" align="center">LUNAS</h1>
                            @endif
                        </td>
                    </tr>
                    
                </table>


                <br><br><br>
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>ID Pembayaran</th>
                                <th>Status Bayar</th>
                                <th>Metode Bayar</th>
                                <th>Bukti Bayar</th>
                                <th>Jumlah Bayar</th>
                                <th>Tanggal Bayar</th>
                                <th>Nomor Rekening</th>
                                <th>Atas Nama</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $bayar as $b )    
                            <tr>
                                <td>{{ $b->id_pembayaran }}</td>
                                
                                @if ($b->status_bayar == '0')
                                    <td>
                                        <span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Menunggu Verifikasi</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Diverifikasi</span> 
                                    </td> 
                                @endif

                                @if ($b->bank_transfer == '1')
                                    <td>Tunai</td>
                                @elseif ($b->bank_transfer == '2')
                                    <td>BRI</td>
                                @elseif ($b->bank_transfer == '3')
                                    <td>BCA</td>
                                @endif

                                <td>
                                    @if ($b->bukti_bayar != null)
                                    <div class="zoom">
                                        <img src="{{ asset($b->bukti_bayar) }}" width="200px" >
                                        <a href='{{ asset($b->bukti_bayar) }}' target='_blank'>Lihat Gambar Full</a>
                                    </div>
                                    @else
                                        Tidak Ada Gambar
                                    @endif
                                </td>
                                <td>@currency($b->jumlah_bayar)</td>
                                <td>{{ date('d-M-Y H:i:s', strtotime($b->tanggal_pembayaran)) }}</td>                                
                                <td>{{ $b->nomor_rekening ?? '-'}}</td>
                                <td>{{ $b->atas_nama }}</td>
                                <td>{{ $b->created_at }}</td>
                                
                              
                            </tr>
                            @endforeach        
                        </tbody>
                    </table>
                </div>


               
        


            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ asset('davur/vendor/datatables/js/jquery.dataTables.min.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/js/plugins-init/datatables.init.js') }}" defer="" type="text/javascript"></script>              
@endsection
