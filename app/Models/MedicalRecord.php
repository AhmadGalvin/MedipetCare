<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id', 'visit_date', 'symptom', 'diagnosis_id', 'prescription'
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}