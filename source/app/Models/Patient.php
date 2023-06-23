<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient
{
    protected $fillable = ['nom', 'prenom', 'email'];

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
    public function user():BelongsTo{

        return $this->belongsTo(User::class);
    }

}
