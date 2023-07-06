<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{

    use SoftDeletes;

    protected $fillable = ['health_problem_list','medical_history','allergy','medical_record_paths','user_id'];
    protected $table = 'patients';
    protected $primaryKey = 'id_patients';

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
    public function user():BelongsTo{

        return $this->belongsTo(User::class,'user_id');
    }

}
