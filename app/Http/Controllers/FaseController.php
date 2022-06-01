<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaseRequest;
use App\Http\Requests\UpdateFaseRequest;
use App\Models\Gallery;

class FaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($proyek_id)
    {
        return view('pages.fase.create',[
            'title' => 'Tambah Fase',
            'proyek_id' => $proyek_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'proyek_id' => ['required'],
            'nama_fase' => ['required'],
            'tanggal_mulai' => ['required'],
            'tanggal_akhir' => ['required'],
            'estimasi_pendanaan' => ['required'],
            'file' => ['required']
        ]);

        $data = request()->except('file');
        $fase = Fase::create($data);

        $files = request()->file('file');
        foreach($files as $file)
        {
            Gallery::create([
                'fase_id' => $fase->id,
                'type' => 'document',
                'url' => $file->store('fase','public')
            ]);
        }

        return redirect()->route('proyek.show',request('proyek_id'))->with('success','Fase berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function show(Fase $fase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function edit(Fase $fase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaseRequest  $request
     * @param  \App\Models\Fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaseRequest $request, Fase $fase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fase  $fase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fase $fase)
    {
        //
    }
}
