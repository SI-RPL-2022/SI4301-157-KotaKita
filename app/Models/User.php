<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Kota;
use App\Models\Feedback;
use App\Models\Aduan;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens,HasRoles, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'kota_id',
        'foto',
        'password',
    ];

    public function foto()
    {
        if($this->foto)
        {
            return asset('storage/' . $this->foto);
        }else{
            return asset('assets/img/logo.png');
        }
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function User(){
    return $this->hasOne(Kota::class, 'id', 'id_kota');
    return $this->hasMany(Feedback::class, 'id', 'id_feedback');
    return $this->hasMany(Aduan::class, 'id', 'id_aduan');
    }
}
