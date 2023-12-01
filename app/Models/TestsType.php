<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestsType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    function Result()
    {
        return $this->hasMany(Result::class);
    }
}
