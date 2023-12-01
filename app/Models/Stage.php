<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    function Result()
   {
       return $this->hasMany(Result::class);
   }
   function Student()
   {
       return $this->hasMany(Student::class);
   }
   function Subject()
   {
       return $this->hasMany(Subject::class);
   }
}
