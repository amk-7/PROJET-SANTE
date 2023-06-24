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
    protected $primaryKey = 'payement_mode_id';
    protected $table = 'payement_modes';
    protected $fillable = ['methode','name','phone_number_identification','phone_number','full_name_on_phone_number','tarif_id'];

    public function politiqueAnnulations():HasMany{
        return $this->hasMany(PolitiqueAnnulation::class);
    }

    public function tarif():BelongsTo{
        return $this->belongsTo(Tarif::class);
    }
}
