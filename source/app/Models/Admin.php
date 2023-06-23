<?php

namespace App\Models;

use App\Models\Evenement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PolitiqueAnnulation;

class Admin extends Model
{
    use HasFactory;

    public function evenements():HasMany{
        return $this->hasMany(Evenement::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function politiqueAnnulations():HasMany{
        return $this->hasMany(PolitiqueAnnulation::class);
    }

}