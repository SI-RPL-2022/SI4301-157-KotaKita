<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index',[
            'title' => 'Profile Saya'
        ]);
    }

    public function edit()
    {
        $data_kota = Kota::orderBy('nama','ASC')->get();
        return view('pages.profile.edit',[
            'title' => 'Edit Profile',
            'data_kota' => $data_kota
        ]);
    }

    public function update()
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required',Rule::unique('users','email')->ignore(auth()->id())],
            'kota_id' => ['required','numeric']
        ]);

        if(request('password'))
        {
            request()->validate([
                'password' => ['required','min:8','confirmed'],
                'password_confirmation' => ['required']
            ]);
            $password = bcrypt(request('password'));
        }else{
            $password = auth()->user()->password;
        }

        auth()->user()->update([
            'name' => request('name'),
            'email' => request('email'),
            'kota_id' => request('kota_id'),
            'password' => $password
        ]);

        return redirect()->route('profile.index')->with('success','Profile berhasil disimpan.');
    }

    public function fotoUpdate()
    {
        request()->validate([
            'foto' => ['required','image','mimes:jpg,png,jpeg']
        ]);
        Storage::disk('public')->delete(auth()->user()->foto);
        auth()->user()->update([
            'foto' => request()->file('foto')->store('user','public')
        ]);

        return redirect()->route('profile.index')->with('success','Foto Profile berhasil diupdate.');
    }

    public function fotoRemove()
    {
        auth()->user()->update([
            'foto' => NULL
        ]);
        Storage::disk('public')->delete(auth()->user()->foto);
        return redirect()->route('profile.index')->with('success','Foto Profile berhasil dihapus.');
    }
}
