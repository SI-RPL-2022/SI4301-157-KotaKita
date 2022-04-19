<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProyekRequest;
use App\Http\Requests\UpdateProyekRequest;
use App\Models\Fase;
use App\Models\Feedback;
use App\Models\Aduan;
use App\Models\Kota;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = Proyek::with('Proyek')->get();
        return view('proyek', compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $proyek = new proyek();
        $proyek->id_fase = $request->id_fase;
        $proyek->id_feedback = $request->id_feedback;
        $proyek->id_aduan = $request->id_aduan;
        $proyek->id_kota = $request->id_kota;
        $proyek->name = $request->nama;
        $proyek->keterangan = $request->keterangan;
        $proyek->mulai = $request->mulai;
        $proyek->akhir = $request->akhir;

        $imageName = ($request->image)->getClientOriginalName();
        $proyek->foto = $imageName;
        $request->image->move(public_path('assets/img/'), $imageName);

        $proyek->save();

        return redirect()->route('proyek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProyekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProyekRequest  $request
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProyekRequest $request, Proyek $proyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        //
    }
}
