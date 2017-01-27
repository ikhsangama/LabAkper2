<?php

namespace App\Http\Controllers;

use App\InstruksiKerja;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//detail instruksikerja
        $instruksikerjas = InstruksiKerja::all();
        $count_instruksikerja = $instruksikerjas->count();
        $count_ik_alat = $instruksikerjas->where('kategori_ik', 'IK Alat')->count();
        $count_ik_anak = $instruksikerjas->where('kategori_ik', 'IK Kep. Anak')->count();
        $count_ik_dasar = $instruksikerjas->where('kategori_ik', 'IK Kep. Dasar')->count();
        $count_ik_maternitas = $instruksikerjas->where('kategori_ik', 'IK Kep. Maternitas')->count();
        $count_ik_bedah = $instruksikerjas->where('kategori_ik', 'IK Medikal Bedah')->count();
        return view('dashboard', ['ik'=>$count_instruksikerja, 'ik_alat'=>$count_ik_alat, 'ik_anak'=>$count_ik_anak,
      'ik_dasar'=>$count_ik_dasar, 'ik_maternitas'=>$count_ik_maternitas, 'ik_bedah'=>$count_ik_bedah]);
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
    public function show(InstruksiKerja $instruksiKerja)
    {
        //mengurus tabel spesifik
        // $instruksikerja = DB
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function edit(InstruksiKerja $instruksiKerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstruksiKerja  $instruksiKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstruksiKerja $instruksiKerja)
    {
        //
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
