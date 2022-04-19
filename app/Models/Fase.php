<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proyek;
use App\Models\Document;

class Fase extends Model
{
    use HasFactory;
    public function Fase(){
        return $this->belongsTo(Proyek::class, 'id', 'id_proyek');
        return $this->hasMany(Document::class, 'id', 'id_dokumen');
    }
}
