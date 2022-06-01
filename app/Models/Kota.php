<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $guarded = ['id'];

    public function gambar()
    {
        if($this->gambar)
        {
            return asset('storage/'.$this->gambar);
        }
    }
}
