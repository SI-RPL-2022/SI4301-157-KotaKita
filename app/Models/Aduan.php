<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proyek;
use App\Models\User;

class Aduan extends Model
{
    use HasFactory;
    public function Aduan(){
        return $this->belongsTo(User::class, 'id', 'id_user');
        return $this->hasOne(Proyek::class, 'id', 'id_proyek');
        }
}
