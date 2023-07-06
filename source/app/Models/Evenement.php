<?php

namespace App\Models;

use App\Models\Jour;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Personnel;

class Evenement extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'event_id';
    protected $fillable = ['type', 'staff_id','title','description'];

    public function jours():HasMany{
        return $this->hasMany(Jour::class, 'event_id');
    }

    public function images():HasMany{
        return $this->hasMany(Image::class, 'event_id');
    }

    public function setDayToEvent($request) : void
    {
        if (! $request->date[0]){
            $request->date = $request->on_line_date;
            $request->start_time = $request->on_line_start_time;
            $request->end_time = $request->on_line_end_time ;
        }

        for ($i=0; $i<count($request->date); $i++){
            Jour::create([
                'date' => $request->date[$i],
                'start_time' => $request->start_time[$i],
                'end_time' => $request->end_time[$i],
                'link' => $request->link[$i] ?? null,
                'country' => $request->country[$i] ?? null,
                'town' => $request->town[$i] ?? null,
                'address' => $request->address[$i] ?? null,
                'longitude' => $request->longitude[$i] ?? null,
                'latitude' => $request->latitude[$i] ?? null,
                'event_id' => $this->event_id,
            ]);
        }
    }

    public function getType(){
        return $this->type == '0' ? 'En ligne' : 'En présentiel';
    }

    public function admin():BelongsTo{
        return $this->belongsTo(Personnel::class);
    }
}
