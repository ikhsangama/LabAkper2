<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//tambah
use App\Http\Requests;
use Storage;//delete storage
use File;
//Mail
use App\Mail\userRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered; //event, RegistersUsers

class PenggunaController extends Controller
{
    public function __construct(){
          $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunas = User::all();
        // dd($penggunas);
        $list_dosen = $penggunas->where('level', 2)->where('status',1)->where('setuju',1)->sortBy('nama');
        $list_mhs_d3 = $penggunas->where('level', 'D III')->where('status',1)->where('setuju',1)->sortBy('nama');
        $list_mhs_d4 = $penggunas->where('level', 'D IV')->where('status',1)->where('setuju',1)->sortBy('nama');
        $list_blm_ver = User::where('setuju', '<>', 1)
          ->orwhere('status', '<>', 1)->orderBy('nama')->get();
          // dd($list_dosen);
        // dd(!$list_dosen->isEmpty());
        return view('dash_admin/pengguna', [
        'dosens'=>$list_dosen,
        'mhs_d3s'=>$list_mhs_d3,
        'mhs_d4s'=>$list_mhs_d4,
        'blm_verifs'=>$list_blm_ver,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dash_admin/create_pengguna');
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
        'nama' => 'required',
        'email' => 'required|email|max:35|unique:pengguna',
        'password' => 'required|min:3|confirmed',
        'ktm' => 'mimes:jpeg,jpg,png|max:4000',
        'nim' => 'required|unique:pengguna|numeric',
      ]);

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
      $pengguna->setuju = 1;
      $pengguna->token=str_random(10);

      //cek status
      if($request->status<>'on'){
        $status=0;
      }else $status=1;

      $pengguna->status = $status;
      $pengguna->save();
      if($status<>1){
        Mail::to($pengguna->email)->send(new userRegistered($pengguna));
      }
      return redirect ('/pengguna')->with('success', 'Data baru ditambahkan,
      nama: '. $request->nama .' dengan NIM/NIP: '. $request->nim);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pengguna = User::find($id);

      if ($pengguna->level==2){
        $level='Dosen';
        // dd($level);
        }
      elseif ($pengguna->level=='D III') {
        $level='Mahasiswa D III';
      }
      elseif ($pengguna->level=='D IV') {
        $level='Mahasiswa D IV';
      }
      else{
        dd("Salah");
      }
      return view('dash_admin/single_pengguna', ['pengguna' => $pengguna,'level'=>$level]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instruksikerja = InstruksiKerja::find($id);

        if(!$instruksikerja){
          abort(404);
        }
        return view('dash_admin/edit_instruksikerja', ['instruksikerja' => $instruksikerja]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'judul' => 'required',
        'kategori_ik'   =>'required',
        'file_ik' => 'mimes:pdf'
      ]);
      $instruksikerja = InstruksiKerja::find($id);
      // gambar

      $file       = $request->file('file_ik');

      if(! empty($file)){
        $fileName   = $request->judul . "-" . time() .".pdf";
        $request->file('file_ik')->storeAs("public/instruksikerja", $fileName);
        $instruksikerja->file_ik = $fileName;
      }
      $instruksikerja->judul = $request->judul;
      $instruksikerja->kategori_ik = $request->kategori_ik;
      $instruksikerja->save();
      return redirect ('/instruksikerja')->with('success', 'Data lama terupdate,
      dengan nama: '. $request->judul .' pada kategori: '. $request->kategori_ik);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus berdasarkan ID
        $pengguna = User::find($id);
        File::delete(public_path('storage/ktm/' .$pengguna->ktm));
        $pengguna->delete();
        return redirect ('/pengguna')->with('alert', 'Data '. $pengguna->nama .' telah dihapus');
        // return redirect ('/instruksikerja')->with('alert', 'Data '. $instruksikerja->judul .' pada kategori: '. $instruksikerja->kategori_ik . ' telah dihapus');
        // "{{ asset('storage/ktm/' .$pengguna->ktm) }}"
    }

    //DOWNLOAD
    public function download($id)
    {
      $instruksikerja = InstruksiKerja::find($id);
      $fileName = $instruksikerja->file_ik;
      // dd($instruksikerja);
      return view('single_ik', ['instruksikerja' => $instruksikerja]);
    }
}
