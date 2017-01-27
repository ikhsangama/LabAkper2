<?php

namespace App\Http\Controllers;

use App\InstruksiKerja;
use Illuminate\Http\Request;
//tambah
use App\Http\Requests;

class InstruksiKerjaController extends Controller
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
        $instruksikerjas = InstruksiKerja::all();
        // dd($instruksikerjas->where('kategori_ik', 'IK Alat'));
        $list_ik_alat = $instruksikerjas->where('kategori_ik', 'IK Alat');
        $list_ik_anak = $instruksikerjas->where('kategori_ik', 'IK Kep. Anak');
        $list_ik_dasar = $instruksikerjas->where('kategori_ik', 'IK Kep. Dasar');
        $list_ik_maternitas = $instruksikerjas->where('kategori_ik', 'IK Kep. Maternitas');
        $list_ik_bedah = $instruksikerjas->where('kategori_ik', 'IK Medikal Bedah');

        return view('instruksikerja', [
        'instruksikerjas'=>$instruksikerjas,
        'ik_alat'=>$list_ik_alat,
        'ik_anak'=>$list_ik_anak,
        'ik_dasar'=>$list_ik_dasar,
        'ik_maternitas'=>$list_ik_maternitas,
        'ik_bedah'=>$list_ik_bedah,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instruksikerja = InstruksiKerja::find($id);
        return view('instruksikerja', ['instruksikerja' => $instruksikerja,]);
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
    public function destroy(InstruksiKerja $instruksiKerja)
    {
        //
    }
}
