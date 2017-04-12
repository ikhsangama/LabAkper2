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
        $list_ik_alat = $instruksikerjas->where('kategori_ik', 'IK Alat')->sortBy('judul');
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
        return view ('dash_admin/create_instruksikerja');
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
      $instruksikerja = InstruksiKerja::find($id);
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
        File::delete(public_path('storage/instruksikerja/' .$instruksikerja->file_ik));
        dd($instruksikerja->file_ik);
        $instruksikerja->delete();
        return redirect ('/instruksikerja')->with('alert', 'Data '. $instruksikerja->judul .' pada kategori: '. $instruksikerja->kategori_ik . ' telah dihapus');
    }

    // instruksikerja chart
    public function chart()
    {
      $instruksikerjas = InstruksiKerja::all();
      $count_instruksikerja = $instruksikerjas->count();
      $count_ik_alat = $instruksikerjas->where('kategori_ik', 'IK Alat')->count();
      $count_ik_anak = $instruksikerjas->where('kategori_ik', 'IK Kep. Anak')->count();
      $count_ik_dasar = $instruksikerjas->where('kategori_ik', 'IK Kep. Dasar')->count();
      $count_ik_maternitas = $instruksikerjas->where('kategori_ik', 'IK Kep. Maternitas')->count();
      $count_ik_bedah = $instruksikerjas->where('kategori_ik', 'IK Medikal Bedah')->count();

      // Chart
      $chartjs = app()->chartjs
       ->name('barChartTest')
       ->type('bar')
      //  ->size(['width' => 400, 'height' => 200])
       ->datasets([
           [
               "label" => "IK Alat",
               'backgroundColor' => ['rgba(233, 30, 99, 0.5)'],
               'data' => [$count_ik_alat, 0]
           ],
           [
               "label" => "IK Anak",
               'backgroundColor' => ['rgba(103, 58, 183, 0.5)'],
               'data' => [$count_ik_anak, 0]
           ],
           [
               "label" => "IK Dasar",
               'backgroundColor' => ['rgba(33, 150, 243, 0.5)'],
               'data' => [$count_ik_dasar, 0]
           ],
           [
               "label" => "IK Maternitas",
               'backgroundColor' => ['rgba(33, 150, 243, 0.5)'],
               'data' => [$count_ik_maternitas, 0]
           ],
           [
               "label" => "IK Dasar",
               'backgroundColor' => ['rgba(76, 175, 80, 0.5)'],
               'data' => [$count_ik_bedah, 0]
           ],
       ])
       ->labels(['Total Instruksi Kerja: '. + $count_instruksikerja])
       ->options([
         'responsive' => true,
       ]);

      return view('dash_admin/chart_instruksikerja', compact('chartjs'));
    }
}
