<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Consultation;

class Presentiel extends Model
{
    use HasFactory;

    public function consultation():BelongsTo{
        return $this->belongsTo(Consultation::class);
    }
}
