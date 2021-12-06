<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\blog;
use App\Models\role_users;
use App\Models\kategoriProduk;
use App\Models\produk;
use App\Models\galeriProduk;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Exception;

class AdminPembayaranController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function indexAdPembayaran()
    {
        if (request()->user()->hasRole('adminPembayaran')) {
            $totalusers = DB::table('users')
            ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
            ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.id','=',NULL)
            ->orWhere('roles.id','=','R0001')
            ->whereNull('users.deleted_at')->get()->count('users.id');

            $totalproduk = produk::whereNull('deleted_at')->get()->count('id');
            $totalpemesanan = Pemesanan::with(['products'])->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $jumlahSudahBayar = Pembayaran::with('detpems')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');

            $waiting = Pemesanan::with(['products'])->where('status_pemesanan', '=', '1')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $notyet = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '1')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $still = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '2')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $delivered = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '3')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $finished = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '4')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');

            
            $notverif = Pembayaran::with('detpems')->where('status_bayar', '=', '0')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');
            $JMLnotverif = Pembayaran::with('detpems')->where('status_bayar', '=', '0')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
            $verified = Pembayaran::with('detpems')->where('status_bayar', '=', '1')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');
            $JMLverified = Pembayaran::with('detpems')->where('status_bayar', '=', '1')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
            $pycount = Pembayaran::with('detpems')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');

            $page_title = 'Dashboard';
            $page_description = 'Some description for the page';
            $logo = "teamo/images/aisyacatering_kontak_logo.png";
            $logoText = "teamo/images/aisya-catering-logo3.png";
            $action = __FUNCTION__;
            return view('viewAdminPembayaran.homeAdPembayaran', compact('page_title', 'totalusers', 'totalproduk',
            'totalpemesanan','jumlahSudahBayar','waiting','notyet','still','delivered','finished',
            'notverif', 'verified', 'pycount', 'JMLnotverif', 'JMLverified',
            'page_description','action','logo','logoText'));
        } else {
            return redirect('/');
        } 
    }
}
