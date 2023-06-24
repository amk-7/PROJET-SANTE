<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;

    protected $table = 'specialitys';
    protected $primaryKey = 'speciality_id';
    protected $fillable = ['name','main'];
}
