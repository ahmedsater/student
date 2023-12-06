<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['birthday','email','image','stage_id','gender_id','city_id','phone','address','name'];

    function Stage()
   {
       return $this->belongsTo(Stage::class);
   }
    function Gender()
   {
       return $this->belongsTo(Gender::class);
   }
    function City()
   {
       return $this->belongsTo(City::class);
   }
    function Result()
   {
       return $this->hasMany(Result::class);
   }
   function getImageAttribute($image)
   {
       if($image != null) {
           return asset('upload/'.$image);
       }

       return null;
   }
//    public $timestamps = false; ايقاف التاريخ
   public $created_at = false;

//    protected $dateFormat = 'Y-m-d'; عرض الوقت

}

