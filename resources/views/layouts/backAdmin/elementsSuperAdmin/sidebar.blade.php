<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{!! url('/superAdmin'); !!}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user-9"></i>
							<span class="nav-text">Pengguna</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/UserTable'); !!}">Daftar Pengguna</a></li>
                            <li><a href="{!! url('/UserFormInput'); !!}">Tambah Pengguna</a></li>
                            <li><a href="{!! url('/AddUserRole'); !!}">Tambah Peran Pengguna</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-box"></i>
                            <span class="nav-text">Kategori Produk</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/CategoryTable'); !!}">Daftar Kategori</a></li>
                            <li><a href="{!! url('/ViewFormCategory'); !!}">Tambah Kategori</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notebook-5"></i>
                            <span class="nav-text">Produk</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/ProductTable'); !!}">Daftar Produk</a></li>
                            <li><a href="{!! url('/ViewFormProduct'); !!}">Tambah Produk</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Order Masuk</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/PemesananTable'); !!}">Daftar Order Masuk</a></li>
                            <li><a href="{!! url('/ViewFormPemesanan'); !!}">Tambah Order Masuk</a></li>
                            <li><a href="{!! url('/OrderDiterima'); !!}">Daftar Order Diterima</a></li>
                            <li><a href="{!! url('/PaymentTable'); !!}">Daftar Pembayaran</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-tab"></i>
                        <span class="nav-text">Kalender Orderan</span>
                    </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/OrderCalendar'); !!}">Kalender Order</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notebook-3"></i>
                        <span class="nav-text">Blog</span>
                    </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/BlogTable'); !!}">Daftar Blog</a></li>
                        </ul>
                    </li>
                </ul>
            
				<div class="add-menu-sidebar">
					<img src="{{ asset('davur/images/icon1.png') }}" alt=""/>
					<p>Organisasikan Profilmu, <strong>{{ Auth::user()->name }}</strong>. Ganti Sandi atau ubah nama.</p>
					<a href="{{ url('/uprof')}}" class="btn btn-warning btn-block light">Profilku</a>
				</div>
				<div class="copyright">
					<p><strong>Davur - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
				</div>
			</div>
        </div>