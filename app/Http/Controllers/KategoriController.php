<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\AlatBahan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kategoris = Kategori::orderBy('nama')->paginate(1);
      return view('kategori', [
      'kategoris'=>$kategoris,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dash_admin/create_kategori');
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
      ]);

      $kategori = new Kategori;
      $kategori->nama = $request->nama;
      $kategori->save();
      return redirect ('/kategori')->with('success', 'Kategori baru ditambahkan,
      dengan nama: '. $kategori->nama);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $alatbahans = AlatBahan::where('kategori_id',$id)->paginate(2);
      $nama = Kategori::find($id)->nama;
      $kategori = Kategori::find($id);
      // dd($kategori, $nama_kategori);
      return view ('single_kategori',
      [
        'alatbahans'=> $alatbahans,
        'nama' => $nama,
        'kategori' => $kategori
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
      $kategori = Kategori::find($id);
      if(!$kategori)
      {
        abort(404);
      }
      return view('dash_admin/edit_kategori', ['kategori' => $kategori]);
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
      $this->validate($request,
      [
        'kategori' => 'required',
      ]);
      // dd('sini');
      $kategori = Kategori::findOrFail($id);
      $kategori->nama = $request->kategori;
      $kategori->save();
      return redirect ('/kategori')->with('success', 'Kategori lama terupdate,
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
      return redirect ('/kategori')->with('alert', 'Kategori '. $kategori->nama .' telah dihapus');
    }
}
