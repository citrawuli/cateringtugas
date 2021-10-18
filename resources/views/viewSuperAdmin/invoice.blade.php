<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>

  <table style="width:100%">
    <tr>
        <td valign="top"><img src="{{asset('/teamo/images/aisya-catering-logo2.png')}}" alt="" width="250"/></td>
        <td >
            <pre>
                <H1 style="color: rgb(255, 255, 255)" >ORDER INVOICE</H1>
            </pre>
        </td>
        <td style="align:right">
            <pre>
                <strong>Aisya Catering Surabaya</strong>
                Jl. Kebonsari III No.28, Kebonsari,
                Kec. Jambangan, Kota Surabaya,
                Jawa Timur 60233
                Telepon : (031) 828 1065
            </pre>
        </td>
        
    </tr>
    
  </table>

    @foreach( $pemesanan as $key =>$order )
    

  <br/>
  <table width="100%">
    
    <tbody>
        <tr>
            <td ><strong>{{ $order->nama_lengkap_pembeli }}</strong></td>
            <td> <strong>Pemesanan</strong></td>
            <td align="right">No. Invoice {{ $order->id_pemesanan }}</td>
        </tr>
        <tr>
            <td width="30%">{{ $order->alamat_lengkap_pembeli }} </td>
            <td>{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }} | {{ $order->untuk_jam }}</td>
            <td align="right"><strong> Pesan tidak bisa dibatalkan atau diubah H-1</strong></td>
        </tr>
        <tr>
            <td>{{ $order->no_hp_pembeli }}</td>
            <td>
                @if ($order ->pengambilan == '1')
                <span>Diambil sendiri</span>
                @elseif ($order ->pengambilan == '2')
                <span>Dikirim Go-Car</span>
                @endif
            </td>
        </tr>
    </tbody>
  </table>
  <br/>  <br/>  <br/>


  <table width="100%">
    <thead style="background-color: lightgray;">
        <tr>
            <th>#</th>
            <th>Deskripsi</th>
            <th>Kuantitas</th>
            <th>Harga unit</th>
            <th>Total unit</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $pemesanan as $key =>$order )
            {{-- {{dd($pemesanan)}}  --}}
            
            @foreach ($order->products as $det_pem  )
                <tr>
                    <td align="center">{{ $loop->iteration }}</td>
                    <td>{{ $det_pem->nama_produk ?: 'null' }}</td>
                    <td align="center">{{ $det_pem->pivot->kuantitas ?:  'null'}}</td>
                    <td align="center">{{ $det_pem->harga_produk }}</td>
                    <td align="right">{{ $det_pem->pivot->sub_total }}</td>
                </tr>
            @endforeach

        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal</td>
            <td align="right">{{ $order->total_sub ?? '-'}}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Diskon Rp</td>
            <td align="right">
                {{ $order->discount ?? '-'}}
            </td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Diskon %</td>
            <td align="right">
                {{ $order->discount_inpercent ?? '-'}}
            </td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total</td>
            <td align="right" class="gray">@currency($order->total_transaksi)</td>
        </tr>
    </tfoot>
    @endforeach
  </table>

</body>