<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use App\Models\User;
use App\Models\Pemesanan;
use App\Models\Pembayaran;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('user')) {
            return view('viewUser.homeUser');
        } else {
            return redirect('/');
        } 
    }

    public function edityourprofile()
    {
        $user = DB::table('users')->where('users.id', $id)
                ->whereNull('deleted_at')->first();
        return view('viewUser.editUserProfile');
                
    }

    public function updateyouruprofile(Request $request, $id)
    {
        $user = auth()->user();
        
        // dd($request->all(),$user->password);
        $validated = $request->validate([
            'current_password' => [    
                'sometimes', 'nullable',           
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Mohon memasukkan password lama yang benar');
                        // dd($request->all(),$user->password);
                    }
                }
            ],
            'new_password' => [
                'sometimes', 'nullable', 'min:8', 'different:current_password','required_with:current_password'
            ],
            'name' => ['required','nullable', 'string', 'max:50'],
            'email' => ['required','nullable', 'string', 'email', 'max:50', 'unique:users,email,'.$user->id.',id'],
        ],
        [
            'new_password.different' => 'Password baru harus berbeda dengan password lama',
            'new_password.min' => 'Password baru harus memiliki 8 karakter',
            'new_password.required_with' => 'Anda perlu mengisi kolom Password Baru jika mengisi kolom Password Lama',
            'name.max' => 'Nama makasimal 50 karakter',
            'email.unique' => 'Email ini sudah ada',
        ]
        );

        $model = user::find($id);
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->password = Hash::make($request->input('new_password'));
        $model->touch();
        $model->save();
        Session::flash('message', "Data profil pengguna berhasil diubah");
        return Redirect::back();
    }

    public function seeyourorder()
    {
        $id=Auth::user()->id;
        $totalpemesanan = Pemesanan::with(['products'])->where('id', '=', $id)
            ->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
    }

    public function seeyourpayment()
    {
        # code...
    }
}
