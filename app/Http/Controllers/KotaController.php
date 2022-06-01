<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKotaRequest;
use App\Http\Requests\UpdateKotaRequest;
use Illuminate\Support\Facades\Storage;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kota = Kota::orderBy('nama','ASC')->orderBy('nama','ASC')->get();
        return view('pages.kota.index',[
            'title' => 'Data Kota',
            'data_kota' => $data_kota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kota.create',[
            'title' => 'Tambah Kota'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'nama' => ['required'],
            'gambar' => ['required','image','mimes:jpg,jpeg,png']
        ]);

        Kota::create([
            'nama' => request('nama'),
            'gambar' => request()->file('gambar')->store('kota','public')
        ]);

        return redirect()->route('kota.index')->with('success','Kota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        return view('pages.kota.edit',[
            'title' => 'Edit Kota',
            'kota' => $kota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKotaRequest  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'nama' => ['required'],
            'gambar' => ['image','mimes:jpg,jpeg,png']
        ]);

        $kota = Kota::findOrFail($id);
        if(request()->file('gambar'))
        {
            Storage::disk('public')->delete($kota->gambar);
            $gambar = request()->file('gambar')->store('kota','public');
        }else{
            $gambar = $kota->gambar;
        }

        $kota->update([
            'nama' => request('nama'),
            'gambar' => $gambar
        ]);

        return redirect()->route('kota.index')->with('success','Kota berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        Storage::disk('public')->delete($kota->gambar);
        $kota->delete();
        return redirect()->route('kota.index')->with('success','Kota berhasil dihapus.');
    }
}
