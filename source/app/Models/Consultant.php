<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Calendrier;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultant extends Model
{


    use HasFactory,SoftDeletes;
    
    protected $fillable = ['license_number','medical_degree_file_path','competences_attestation_file_path','competences_certificate_file_path','profile_confimed','user_id','tarif_id','speciality_id'];
    protected $table = 'consultants';

 


    public function user():BelongsTo
    {
        return $this-> belongsTo(User::class);
    }


    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function calendrier():BelongsTo{
        return $this->belongsTo(Calendrier::class);
    }

}
