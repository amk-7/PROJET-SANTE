<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Consultation;

class Presentiel extends Model
{
    use HasFactory;

    protected $table = 'face_to_faces';
    protected $primaryKey = 'face_to_face_id';
    protected $fillable = ['address','consultation_id'];
    public function consultation():BelongsTo{
        return $this->belongsTo(Consultation::class);
    }
}
