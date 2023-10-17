<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "last_name",
        "middle_name",
        "first_name",
        "age",
        "sex",
        "course",
        "year_level",
    ];
}
