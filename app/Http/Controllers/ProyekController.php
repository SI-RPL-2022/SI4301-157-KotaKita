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
use App\Models\Gallery;
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
        $items = Proyek::proyek()->latest()->paginate(10);
        return view('pages.proyek.index', compact('items'));
    }

    public function create()
    {
        $data_kota = Kota::orderBy('nama','ASC')->get();
        return view('pages.proyek.create',[
            'title' => 'Buat Proyek Baru',
            'data_kota' => $data_kota
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama_proyek' => ['required'],
            'logo' => ['required','image','mimes:jpg,png,jpeg'],
            'gambar' => ['required','image','mimes:jpg,png,jpeg'],
            'tanggal_mulai' => ['required'],
            'tanggal_akhir' => ['required'],
            'kota_id' => ['required']
        ]);

        Proyek::create([
            'nama_proyek' => request('nama_proyek'),
            'kota_id' => request('kota_id'),
            'logo' => request()->file('logo')->store('proyek','public'),
            'gambar' => request()->file('gambar')->store('proyek','public'),
            'type' => 'proyek',
            'tanggal_mulai' => request('tanggal_mulai'),
            'tanggal_akhir' => request('tanggal_akhir'),
            'keterangan' => request('keterangan')
        ]);

        return redirect()->route('proyek.index')->with('success','Proyek berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Proyek::with(['fases' => function($q){
            return $q->orderBy('tanggal_mulai','ASC');
        },'aduans.user','aduans.foto'])->findOrFail($id);
        $fase = Fase::where('proyek_id',$item->id)->orderBy('id','DESC')->first();
        if($fase)
        {
            $galleries = Gallery::where('fase_id',$fase->id)->where('type','image')->get();
            $fase_id = $fase;
        }else{
            $fase_id =0;
            $galleries = [];
        }
        return view('pages.proyek.show',compact('item','fase_id','galleries'));
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

    public function getByKota()
    {
        $kota_id = request('kota_id');
        $items = Proyek::where('kota_id',$kota_id)->where('type','proyek')->orderBy('nama_proyek','ASC')->get();

        return response()->json($items);
    }
}
