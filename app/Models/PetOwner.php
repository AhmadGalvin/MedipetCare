<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    public $timestamps = false;
    protected $table = 'pet_owners';

    protected $fillable = ['pet_id', 'user_id', 'access_level'];
}