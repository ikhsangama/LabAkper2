<?php

namespace App\Http\Controllers;

use App\Kategori;
// use App\AlatBahan;
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
      $kategoris = Kategori::orderBy('nama_kategori')->paginate(10);

      return view('daftarkategori', [
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
        'kategori' => 'required',
      ]);

      $kategori = new Kategori;
      $kategori->nama_kategori = $request->kategori;
      $kategori->save();
      return redirect ('/daftarkategori')->with('success', 'Kategori baru ditambahkan,
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
        $kategori = Kategori::findOrFail($id);
        // dd($kategori);
        return view ('single_kategori', ['kategori'=> $kategori]);
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
// dd($kategori);
      if(!$kategori){
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
      $this->validate($request, [
        'kategori' => 'required',
      ]);
      // dd('sini');
      $kategori = Kategori::find($id);
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
      return redirect ('/daftarkategori')->with('alert', 'Kategori '. $kategori->nama_kategori .' telah dihapus');
    }
}
