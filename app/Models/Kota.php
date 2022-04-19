<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kota extends Model
{
    use HasFactory;
    public function Kota(){
    return $this->hasMany(User::class, 'id', 'id_user');
    }
}
