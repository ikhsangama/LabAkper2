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
//load Models
use App\Models\Mahasiswa;


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
            'nama' => 'required|string|max:35',
            'email' => 'required|email|max:35|unique:users',
            'password' => 'required|min:3|confirmed',
            'ktm' => 'required|mimes:jpeg,jpg,png|max:4000',
            'nim' => 'required|unique:users,username|numeric',
            'tatatertib' => 'required',
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
        // dd($request);
        $user = new User;
        $user->username = $request->nim;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->token=str_random(10);
        $user->status=0;
        // dd($request->level==3 || 4);
        if($request->level==3)
        {
          $mahasiswa = new Mahasiswa;
          $mahasiswa->nama = $request->nama;
          $mahasiswa->nim = $request->nim;
          //gambar
          $file       = $request->file('ktm');
          $fileName   = $request->nim . "-" . time() .".png";
          $request->file('ktm')->storeAs("public/ktm", $fileName);
          //endgambar
          $mahasiswa->ktm = $fileName;
          $mahasiswa->telp = $request->telp;
          $mahasiswa->setuju = 0;
        }

        Mail::to($user->email)->send(new userRegistered($user));

        $user->save();
        $mahasiswa->user_id = $user->id;
        $mahasiswa->save();

        return redirect('/login')->with('warning', 'Silahkan lakukan verifikasi email untuk login');;
    }

    protected function verify_register($token, $username)
    {
      $user_id = User::where('username', $username)->first()->id;
      $user = User::find($user_id);
      //menguji token verifikasi
      if ($user->token != $token){
        return redirect('login')->with('warning', 'Verifikasi email tidak cocok');
      }
      //status user jadi 1
      $user->status =1;
      $user->save();
      //login
      $this->guard()->login($user);
      return redirect ('/');
      //redirect
    }
}
