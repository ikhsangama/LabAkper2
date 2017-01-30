<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//tambah
use App\Http\Requests;

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
        // $list_blm_ver = $penggunas->except(['setuju',1],['status',1])->sortBy('nama');
        // $list_blm_ver = $penggunas->where('status','<>',1)->orWhere('setuju','<>',1)->sortBy('nama');
        $count_blm_ver = User::where('setuju', '<>', 1)
          ->orwhere('status', '<>', 1)->orderBy('nama')->get();
// dd($list_blm_ver, $count_blm_ver,$list_dosen);
        // dd($blm_ver->orderBy('nama'));
        // $list_blm_ver = User::where('setuju', '<>', 1)
        //   ->orwhere('status', '<>', 1)->sortBy('nama');

        return view('dash_admin/pengguna', [
        'dosens'=>$list_dosen,
        'mhs_d3s'=>$list_mhs_d3,
        'mhs_d4s'=>$list_mhs_d4,
        'blm_verifs'=>$count_blm_ver,
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
        'judul' => 'required|unique:instruksi_kerja',
        'kategori_ik'   =>'required',
        // 'file_ik' => 'required|mimes:pdf'
      ]);
      $instruksikerja = new InstruksiKerja;
      $instruksikerja->judul = $request->judul;
      $instruksikerja->kategori_ik = $request->kategori_ik;
      //upload file
      $fileName   = $request->judul . "-" . time() .".pdf";
      $request->file('file_ik')->storeAs("public/instruksikerja", $fileName);
      $instruksikerja->file_ik = $fileName;
      $instruksikerja->save();
      return redirect ('/instruksikerja')->with('success', 'Data baru ditambahkan,
      dengan nama: '. $request->judul .' pada kategori: '. $request->kategori_ik);
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
      // dd("sini");
      $fileName = $instruksikerja->file_ik;
      // dd($instruksikerja);
      return view('single_ik', ['instruksikerja' => $instruksikerja]);
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
        $instruksikerja = InstruksiKerja::find($id);
        $instruksikerja->delete();
        return redirect ('/instruksikerja')->with('alert', 'Data '. $instruksikerja->judul .' pada kategori: '. $instruksikerja->kategori_ik . ' telah dihapus');
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
