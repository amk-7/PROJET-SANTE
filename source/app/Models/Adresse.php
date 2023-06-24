<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $primaryKey = 'address_id';
    protected $fillable = ['country','town','neighborhood','longitude','latitude','orientation'];
}
