<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Kota;
use App\Models\Proyek;

class AduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyek = Proyek::find(request('proyek_id'));
        $data_kota = Kota::orderBy('nama','ASC')->get();
        $data_proyek = Proyek::where('type','proyek')->orderBy('nama_proyek','ASC')->get();
        return view('pages.aduan.create',[
            'proyek' => $proyek,
            'data_kota' => $data_kota,
            'data_proyek' => $data_proyek
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAduanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'proyek_id' => ['required'],
            'aduan' => ['required']
        ]);

        $data = request()->except('foto');
        $data['user_id'] = auth()->id();
        $aduan = Aduan::create($data);
        $images = request()->file('foto');
        if($images)
        {
            foreach($images as $image)
            {
                Gallery::create([
                    'aduan_id' => $aduan->id,
                    'proyek_id' => request('proyek_id'),
                    'type' => 'image',
                    'url' => $image->store('proyek/aduan','public')
                ]);
            }
        }

        return redirect()->route('proyek.show',$aduan->proyek_id)->with('success','Aduan yang anda buat berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aduan  $aduan
     * @return \Illuminate\Http\Response
     */
    public function show(Aduan $aduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aduan  $aduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Aduan $aduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAduanRequest  $request
     * @param  \App\Models\Aduan  $aduan
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aduan  $aduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aduan $aduan)
    {
        //
    }
}
