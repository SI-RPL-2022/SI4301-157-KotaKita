<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $q = request('q');
        if($q)
        {
            $items = Proyek::with(['fases.documents'])->where('nama_proyek','like', '%' . $q . '%')->get();
        }else{
            $items = Proyek::with(['fases.documents'])->proyek()->get();
        }
        return view('pages.dokumen.index',[
            'title' => 'List Dokumen',
            'items' => $items,
            'q' => $q
        ]);
    }

    public function download($proyek_id = NULL,$fase_id = NULL,$gallery_id)
    {
        $item = Gallery::findOrFail($gallery_id);
        return Storage::disk('public')->download($item->url);

    }
}
