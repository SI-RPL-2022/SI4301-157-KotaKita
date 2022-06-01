<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proyek;
use App\Models\User;

class Aduan extends Model
{
    use HasFactory;
    protected $table = 'aduan';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function proyek()
    {
        return $this->belongsTo(Proyek::class,'proyek_id','id');
    }

    public function foto()
    {
        return $this->hasMany(Gallery::class,'aduan_id','id');
    }
}
