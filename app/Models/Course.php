<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
       return $this->hasMany(Student::class);
    }

    public function class_content()
    {
       return $this->hasMany(Class_content::class);
    }
}
