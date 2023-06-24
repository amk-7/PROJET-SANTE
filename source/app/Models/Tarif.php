<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\MethodePayement;

class Tarif extends Model
{
    use HasFactory;

    protected $table = 'tarifs';
    protected $primaryKey = 'tarif_id';
    protected $fillable = ['montant','unite_id','currency_id'];

    public function methodePayements():HasMany{
        return $this->hasMany(MethodePayement::class);
    }
}
