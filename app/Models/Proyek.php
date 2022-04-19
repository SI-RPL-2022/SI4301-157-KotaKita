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
    public function Proyek(){
        return $this->hasMany(Fase::class, 'id', 'id_fase');
        return $this->hasMany(Feedback::class, 'id', 'id_feedback');
        return $this->hasMany(Aduan::class, 'id', 'id_aduan');
        return $this->belongsTo(Kota::class, 'id', 'id_kota');
    }
}
