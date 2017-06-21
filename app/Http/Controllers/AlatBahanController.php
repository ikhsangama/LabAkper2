<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Bahan;
use App\Models\Kategori;
use App\Models\AlatBahan;
use App\Models\SatuanAlat;
use App\Models\SatuanBahan;
use Illuminate\Http\Request;

class AlatBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $alatbahans = AlatBahan::orderBy('id')->paginate(10);
      return view('alatbahan', [
      'alatbahans'=>$alatbahans,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createalat()
    {
      $kategoris = Kategori::orderBy('nama')->get();
      $satuan_alats = SatuanAlat::get();
        return view ('dash_admin/create_alat', [
          'kategoris' => $kategoris,
          'satuan_alats' => $satuan_alats,
          'satuan_bahans' => $satuan_bahans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createbahan()
    {
      $kategoris = Kategori::orderBy('nama')->get();
      $satuan_alats = SatuanAlat::get();
      $satuan_bahans = SatuanBahan::get();
      // dd($kategoris, $satuan_alats, $satuan_bahans);
        return view ('dash_admin/create_alatbahan', [
          'kategoris' => $kategoris,
          'satuan_alats' => $satuan_alats,
          'satuan_bahans' => $satuan_bahans,
        ]);
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
        'kategori' => 'required',
      ]);

      $kategori = new Kategori;
      $kategori->nama_kategori = $request->kategori;
      $kategori->save();
      return redirect ('/kategori')->with('success', 'Kategori baru ditambahkan,
      dengan nama: '. $request->kategori);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $alatbahan = AlatBahan::find($id);
      $nama_kategori = Kategori::find($alatbahan->id_kategori)->nama_kategori;
        return view ('single_alatbahan', [
        'alatbahan'=> $alatbahan,
        'nama_kategori' => $nama_kategori
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $alatbahan = AlatBahan::find($id);
      $nama_kategori = Kategori::find($alatbahan->id_kategori)->nama_kategori;
      if(!$alatbahan){
        abort(404);
      }
      return view('dash_admin/edit_alatbahan', [
        'alatbahan' => $alatbahan,
        'nama_kategori' => $nama_kategori
      ]);
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
      $this->validate($request, [
        'kategori' => 'required',
      ]);
      // dd('sini');
      $kategori = Kategori::findOrFail($id);
      $kategori->nama_kategori = $request->kategori;
      $kategori->save();
      return redirect ('/daftarkategori')->with('success', 'Kategori lama terupdate,
      dengan nama: '. $request->kategori);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //hapus berdasarkan ID
      $kategori = Kategori::find($id);
      $kategori->delete();
      return redirect ('/kategori')->with('alert', 'Kategori '. $kategori->nama_kategori .' telah dihapus');
    }
}
