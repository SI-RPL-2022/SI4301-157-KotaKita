<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaseProgress extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function fase()
    {
        return $this->belongsTo(Fase::class,'id','fase_id');
    }
}
