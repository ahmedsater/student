<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','stage_id','master_id'];
    function Result()
    {
        return $this->hasMany(Result::class);
    }
    function Stage()
    {
        return $this->belongsTo(Stage::class);
    }
    function Master()
    {
        return $this->belongsTo(Master::class);
    }
}
