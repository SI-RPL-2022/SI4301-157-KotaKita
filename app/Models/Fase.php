<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proyek;
use App\Models\Document;

class Fase extends Model
{
    use HasFactory;
    protected $table = 'fase';
    protected $guarded = ['id'];

    public $dates = ['tanggal_mulai','tanggal_akhir'];

    public function status()
    {
        if($this->status == 0)
        {
            return 'Belum Selesai';
        }else{
            return 'Selesai';
        }
    }

    public function proyek()
    {
        return $this->belongsTo(Proyek::class,'proyek_id','id');
    }

    public function documents()
    {
        return $this->hasMany(Gallery::class,'fase_id','id');
    }
}
