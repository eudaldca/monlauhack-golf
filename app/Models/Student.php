<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'course',
        'average_mark',
        'enrollment_date',
        'birth_date',
    ];

    protected $casts = [
        'enrollment_date'=> 'datetime',
        'birth_date'=> 'datetime',
    ];
}
