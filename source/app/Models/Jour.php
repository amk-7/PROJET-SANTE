<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    protected $table = 'days';
    protected $primaryKey = 'day_id';
    protected $fillable = ['date', 'start_time','end_time','link','country','address','event_id'];

    public function evenement():BelongsTo{
        return $this->belongsTo(Evenement::class);
    }
}
