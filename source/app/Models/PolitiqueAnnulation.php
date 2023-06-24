<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Admin;
use App\Models\MethodePayement;

class PolitiqueAnnulation extends Model
{
    use HasFactory;
    protected $table = 'cancelation_politiques';
    protected $primaryKey = 'cancelation_politique_id';
    protected $fillable = ['payement_mode_id','administrator','number','percentage'];

    public function admin():BelongsTo{
        return $this->belongsTo(Admin::class);
    }

    public function methodePayement():BelongsTo{
        return $this->belongsTo(MethodePayement::class);
    }
}
