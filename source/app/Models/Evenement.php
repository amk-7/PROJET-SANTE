<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jour;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Admin;

class Evenement extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'event_id';
    protected $fillable = ['staff_id','title','description'];

    public function jours():HasMany{
        return $this->hasMany(Jour::class);
    }

    public function images():HasMany{
        return $this->hasMany(Image::class);
    }

    public function admin():BelongsTo{
        return $this->belongsTo(Admin::class);
    }
}
