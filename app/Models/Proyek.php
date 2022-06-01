<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fase;
use App\Models\Feedback;
use App\Models\Aduan;
use App\Models\Kota;


class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $guarded = ['id'];
    public $dates = ['tanggal_mulai','tanggal_akhir'];

    public function gambar()
    {
        return asset('storage/'.$this->gambar);
    }
    public function logo()
    {
        return asset('storage/'.$this->logo);
    }

    public function fases()
    {
        return $this->hasMany(Fase::class,'proyek_id','id');
    }

    public function firstFase() {
        return $this->hasMany(Fase::class,'proyek_id','id')->orderBy('tanggal_mulai','DESC')->first();
    }

    public function aduans()
    {
        return $this->hasMany(Aduan::class,'proyek_id','id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class,'proyek_id','id')->orderBy('id','DESC');;
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class,'proyek_id','id');
    }

    public function scopeFasilitas($q)
    {
        return $q->where('type','fasilitas');
    }
    public function scopeProyek($q)
    {
        return $q->where('type','proyek');
    }
}
