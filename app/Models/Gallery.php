<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function foto()
    {
        if($this->type === 'image')
        {
            if($this->url)
            {
                return asset('storage/'.$this->url);
            }else{
                return asset('assets/img/logo.png');
            }
        }
    }

    public function fase()
    {
        return $this->belongsTo(Fase::class,'fase_id','id');
    }

    public function proyek()
    {
        return $this->belongsTo(Proyek::class,'proyek_id','id');
    }
}
