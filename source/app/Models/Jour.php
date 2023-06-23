<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    protected $fillable = ['date','horaire','adresse','lien'];

    public function evenement():BelongsTo{
        return $this->belongsTo(Evenement::class);
    }
}
