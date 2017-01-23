<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
//coba
use Illuminate\Http\Request;
use App\Http\Requests;
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

        $file       = $request->file('ktm');
        $fileName   = $request->nim . "-" . time() .".png";
        $request->file('ktm')->storeAs("public/ktm", $fileName);
        //endgambar
        $user = new User;
        $user->nama = $request->nama;
        $user->level = $request->level;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->nim = $request->nim;
        $user->telp = $request->telp;
        $user->ktm = $fileName;
        // $pengguna->created_at = Carbon::now();
        $user->save();

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

}
