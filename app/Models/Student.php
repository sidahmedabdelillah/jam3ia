<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        "family_name",
        "first_name",
        "address",
        "email" ,
        "parent" ,
        "num_parent" ,
        "parent_email",
        "scolaire" ,
        "birth_day" ,
        "commune_id",
        "quran" ,
        "sonna" ,
        "hobies" ,
        "skills" ,
        "health" ,
        "discription" 
    ];

    public function commun()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }


    public function age()
    {
        return Carbon::parse($this->attributes['birth_day'])->age;
    }
}
