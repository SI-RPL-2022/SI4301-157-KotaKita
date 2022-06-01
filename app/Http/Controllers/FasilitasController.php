<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Proyek;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $items = Proyek::fasilitas()->get();
        return view('pages.fasilitas.index',[
            'title' => 'Fasilitas',
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Proyek::with(['feedbacks.user'])->fasilitas()->where('id',$id)->firstOrFail();
        return view('pages.fasilitas.show',[
            'title' => 'Detail Fasilitas',
            'item' => $item
        ]);
    }

    public function edit($id)
    {
        $item = Proyek::fasilitas()->where('id',$id)->firstOrFail();
        return view('pages.fasilitas.edit',[
            'title' => 'Edit Fasilitas',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'keterangan' => ['required']
        ]);

        $item = Proyek::with('galleries')->fasilitas()->where('id',$id)->firstOrFail();
        $item->keterangan = request('keterangan');
        $item->save();

        $images = request()->file('foto');
        if($images)
        {
            foreach($images as $image)
            {
                Gallery::create([
                    'proyek_id' => $item->id,
                    'type' => 'image',
                    'url' => $image->store('proyek/fasilitas','public')
                ]);
            }
        }

        return redirect()->route('fasilitas.show',$item->id)->with('success','Fasilitas berhasil diupdate.');

    }

    public function getByKota()
    {
        $kota_id = request('kota_id');
        $items = Proyek::fasilitas()->where('kota_id',$kota_id)->orderBy('nama_proyek','ASC')->get();

        return response()->json($items);
    }
}
