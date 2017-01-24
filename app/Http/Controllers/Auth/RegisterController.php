<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
//coba
use App\Http\Requests;
use Illuminate\Http\Request;
//Mail
use App\Mail\userRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered; //event, RegistersUsers
//
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|alpha|max:255',
            'email' => 'required|email|max:255|unique:pengguna',
            'password' => 'required|min:3|confirmed',
            'ktm' => 'required|mimes:jpeg,jpg,png|max:4000',
            'nim' => 'numeric'
        ]);
    }

/**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $pengguna = new User;
        $pengguna->nama = $request->nama;
        $pengguna->level = $request->level;
        $pengguna->email = $request->email;
        $pengguna->password = bcrypt($request->password);
        $pengguna->nim = $request->nim;
        $pengguna->telp = $request->telp;
        //gambar
        $file       = $request->file('ktm');
        $fileName   = $request->nim . "-" . time() .".png";
        $request->file('ktm')->storeAs("public/ktm", $fileName);
        //endgambar
        $pengguna->ktm = $fileName;
        $pengguna->token=str_random(10);


        $pengguna->save();
        Mail::to($pengguna->email)->send(new userRegistered($pengguna));
        return redirect('/login')->with('warning', 'Silahkan lakukan verifikasi email untuk login');;
    }

    protected function verify_register($token, $id)
    {
      $pengguna = User::find($id);
      //menguji token verifikasi
      if ($pengguna->token != $token){
        return redirect('login')->with('warning', 'Verifikasi email tidak cocok');
      }
      //status user jadi 1
      $pengguna->status =1;
      $pengguna->save();
      //login
      $this->guard()->login($pengguna);
      return redirect ('/home');
      //redirect
    }
}
