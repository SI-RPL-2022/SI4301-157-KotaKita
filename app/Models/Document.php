<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fase;

class Document extends Model
{
    use HasFactory;
    public function Document(){
        return $this->hasMany(Fase::class, 'id', 'id_fase');
        }
}
