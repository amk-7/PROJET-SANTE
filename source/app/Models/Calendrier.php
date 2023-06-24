<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Consultant;
use App\Models\Horaire;

class Calendrier extends Model
{
    use HasFactory;

    protected $table = 'consultants_horaires';

    protected $fillable = ['schedule_id','consultant_id'];
    public function consultants():HasMany{
        return $this->hasMany(Consultant::class);
    }


    public function horaires():HasMany{
        return $this->hasMany(Horaire::class);
    }
}
