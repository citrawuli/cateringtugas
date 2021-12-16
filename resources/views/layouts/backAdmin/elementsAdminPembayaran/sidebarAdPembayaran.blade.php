<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu2">
            <li><a href="{!! url('/adminPembayaran'); !!}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Beranda</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-reading"></i>
                <span class="nav-text">Progress Masuk</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!! url('/OrderDiterima'); !!}">Daftar Order Diterima</a></li>
                    <li><a href="{!! url('/PaymentTable'); !!}">Daftar Pembayaran</a></li>
                </ul>
            </li>
        </ul>
    
        <div class="add-menu-sidebar">
            <img src="{{ asset('davur/images/icon1.png') }}" alt=""/>
            <p>Organisasikan Profilmu, <strong>{{ Auth::user()->name }}</strong>. Ganti Sandi atau ubah nama.</p>
            <a href="{{ url('/uprof')}}" class="btn btn-danger btn-block light">Profilku</a>
        </div>
        <div class="copyright">
            <p><strong>Davur - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
        </div>
    </div>
</div>