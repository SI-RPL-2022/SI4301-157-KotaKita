<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use App\Models\FaseProgress;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FaseProgressController extends Controller
{
    public function create($proyek_id)
    {
        $fase = Fase::where('proyek_id',$proyek_id)->orderByDesc('id')->first();
        return view('pages.progress.create',[
            'title' => 'Tambah Progress Fase',
            'fase' => $fase
        ]);
    }

    public function store()
    {
        request()->validate([
            'fase_id' => ['required'],
            'judul_progress' => ['required'],
            'deskripsi_singkat' => ['required'],
            'pengeluaran' => ['required']
        ]);

        $data = request()->except('foto','document');
        $fase_progress = FaseProgress::create($data);

        // image
        $images = request()->file('foto');
        if($images)
        {
            foreach($images as $image)
            {
                Gallery::create([
                    'fase_id' => $fase_progress->fase_id,
                    'type' => 'image',
                    'url' => $image->store('proyek/image','public')
                ]);
            }
        }

        // document
        $documents = request()->file('document');
        if($documents)
        {
            foreach($documents as $document)
            {
                Gallery::create([
                    'fase_id' => $fase_progress->fase_id,
                    'type' => 'document',
                    'url' => $document->store('proyek/document','public')
                ]);
            }
        }

        $fase = Fase::with('proyek')->findOrFail($fase_progress->fase_id);
        if(request('status'))
        {
            $fase->status = 1;
            $fase->proyek->type = 'fasilitas';
            $fase->proyek->save();

            return redirect()->route('fasilitas.index')->with('success','Fasilitas bertambah.');;
        }


        return redirect()->route('proyek.show',$fase->proyek_id)->with('success','Progreess berhasil ditambahkan.');
    }

    public function getByFase()
    {
        request()->validate([
            'fase_id' => ['required']
        ]);

        $progress = FaseProgress::where('fase_id',request('fase_id'))->orderBy('id','DESC')->get();
        return response()->json($progress);
    }
}
