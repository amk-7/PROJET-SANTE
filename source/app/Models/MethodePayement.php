<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PolitiqueAnnulation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Tarif;

class MethodePayement extends Model
{
    use HasFactory;

    public function politiqueAnnulations():HasMany{
        return $this->hasMany(PolitiqueAnnulation::class);
    }

    public function tarif():BelongsTo{
        return $this->belongsTo(Tarif::class);
    }
}
