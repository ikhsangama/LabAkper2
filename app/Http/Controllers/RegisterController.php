<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;    //untuk validasi
use Carbon\Carbon;    //untuk timestamp
use App\Http\Requests;
use App\Models\Pengguna; //karena kelas pengguna didalam folder model

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|between:3,30',
            'level' => 'required',
            'email' => 'required',
            'password' => 'required|between:3,30|confirmed',
            'telp' => 'required',
        ])->validate();

          // The blog post is valid, store in database...

        $pengguna = new Pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->level = $request->level;
        $pengguna->password = encrypt($request->password);
        $pengguna->nim = $request->nim;
        $pengguna->telp = $request->telp;
        // $pengguna->foto = $request ->foto;
        $pengguna->created_at = Carbon::now();
        $pengguna->save();

        return view ('inventaris');
    }

// validatormassage



// public function messages()
// {
//     return [
//         'nama.required' => 'isi nama',
//         'nama.min:3' => 'minimal 3',
//     ];
// }
// validatormassage

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
