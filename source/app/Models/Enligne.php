<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Consultation;

class Enligne extends Model
{
    use HasFactory;

    protected $table = 'on_lines';
    protected $primaryKey = 'on_line_id';
    protected $fillable = ['consultation_id'];

    public function consultation():BelongsTo{
        return $this->belongsTo(Consultation::class);
    }
}
