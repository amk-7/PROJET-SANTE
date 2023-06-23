<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\MethodePayement;

class Tarif extends Model
{
    use HasFactory;

    public function methodePayements():HasMany{
        return $this->hasMany(MethodePayement::class);
    }
}
