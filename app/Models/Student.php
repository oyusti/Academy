<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession',
    ];

    public function courses()//Muchos a muchos
    {
        return $this->belongstoMany(Course::class);
    }
}
