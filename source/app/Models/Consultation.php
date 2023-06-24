<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Consultant;
use App\Models\Presentiel;
use App\Models\Enligne;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';
    protected $primaryKey = 'consultation_id';
    protected $fillable = ['consultant_id','patient_id','date','start_time','end_time','state','do'];

    public function patient():BelongsTo{
        return $this->belongsTo(Patient::class);
    }

    public function consultant():BelongsTo{
        return $this->belongsTo(Consultant::class);
    }


    public function presentiel():HasOne{
        return $this->hasOne(Presentiel::class);
    }

    public function enligne():HasOne{
        return $this->hasOne(Enligne::class);
    }
}
