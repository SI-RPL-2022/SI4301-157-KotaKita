<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Kota;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data_kota = Kota::orderBy('nama','ASC')->get();
        return view('pages.contact',[
            'data_kota' => $data_kota
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama_awal' => ['required'],
            'nama_akhir' => ['required'],
            'kota_id' => ['required'],
            'email' => ['required'],
            'no_telepon' => ['required']
        ]);

        $data = request()->all();

        Contact::create($data);

        return redirect()->route('home')->with('success','Terimakasih telah menghubungi kami.');
    }
}
