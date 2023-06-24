<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Calendrier;

class Horaire extends Model
{
    use HasFactory;
    protected $table = 'schedules';

    protected $primaryKey = 'schedule_id';

    protected $fillable = ['start_time','end_time'];
    public function calendrier():BelongsTo{
        return $this->belongsTo(Calendrier::class);
    }
}
