<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
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
      $alatbahans = AlatBahan::orderBy('id')->paginate(5);
      return view('alatbahan', [
      'alatbahans'=>$alatbahans,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
      Validator::make($request->all(), [
        'jenis' => 'required',
        'kategori' => 'required',
        'kode_alatbahan' => 'required',
        'file_ab' => 'required',
        'nama' => 'required',
        'stok' => 'required',
        'satuan' => 'required',
        'spesifikasi' => 'required',
      ])->validate();

      $alatbahan = new AlatBahan;
      $alatbahan->kategori_id = $request->kategori;
      $alatbahan->kode_alatbahan = $request->kode_alatbahan;

      if($request->jenis == "alat"){
        $unique = Validator::make($request->all(), [
          'satuan' => 'required|unique:satuan_alat,nama',
        ])->passes();
        $alatbahan->jenis = "alat";
        $alatbahan->save();

        $alat = new Alat;
        $alat->alatbahan_id = $alatbahan->id;
        if($unique==true) {
          $satuan_alat = new SatuanAlat;
          $satuan_alat->nama = $request->satuan;
          $satuan_alat->save();
          $alat->satuanalat_id = $satuan_alat->id;
        }
        else {
          $satuanalat_id = SatuanAlat::where('nama', $request->satuan)->first()->id;
          $alat->satuanalat_id = $satuanalat_id;
        }
        $alat->nama = $request->nama;
        //upload file
        $fileName   = $request->nama . "_" . time() .".png";
        $request->file('file_ab')->storeAs("public/alat", $fileName);
        $alat->foto = $fileName;
        //
        $alat->spesifikasi = $request->spesifikasi;
        $alat->stok = $request->stok;
        $alat->total = $request->stok;
        $alat->save();
        return redirect ('/alatbahan')->with('success', 'Alat baru ditambahkan,
        dengan nama: '. $alat->nama.
        ', kategori: '. $alatbahan->fkategori->nama.
        ', sejumlah: '. $alat->stok.
        ' '. $alat->fsatuanalat->nama);
      }

      if($request->jenis == "bahan"){
        $unique = Validator::make($request->all(), [
          'satuan' => 'required|unique:satuan_bahan,nama',
        ])->passes();
        $alatbahan->jenis = "bahan";
        $alatbahan->save();

        $bahan = new Bahan;
        $bahan->alatbahan_id = $alatbahan->id;
        if($unique==true) {
          $satuan_bahan = new SatuanBahan;
          $satuan_bahan->nama = $request->satuan;
          $satuan_bahan->save();
          $bahan->satuanbahan_id = $satuan_bahan->id;
        }
        else {
          $satuanbahan_id = SatuanBahan::where('nama', $request->satuan)->first()->id;
          $bahan->satuanbahan_id = $satuanbahan_id;
        }
        $bahan->nama = $request->nama;
        //upload file
        $fileName   = $request->nama . "_" . time() .".png";
        $request->file('file_ab')->storeAs("public/bahan", $fileName);
        $bahan->foto = $fileName;
        //
        $bahan->spesifikasi = $request->spesifikasi;
        $bahan->stok = $request->stok;
        $bahan->total = $request->stok;
        $bahan->save();
        // dd($alatbahan->kategori->nama);
        return redirect ('/alatbahan')->with('success', 'Bahan baru ditambahkan,
        dengan nama: '. $bahan->nama.
        ', kategori: '. $alatbahan->fkategori->nama.
        ', sejumlah: '. $bahan->stok.
        ' '. $bahan->fsatuanbahan->nama);
      }
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
