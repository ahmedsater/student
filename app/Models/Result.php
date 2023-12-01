<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['degree','test_type_id','student_id','subject_id','stage_id'];
    function TestsType(){
       return $this->belongsTo(TestsType::class);
    }
    function Student(){
        return $this->belongsTo(Student::class);
        }
        function Subject(){
            return  $this->belongsTo(Subject::class);
        }
        function Stage(){
          return $this->belongsTo(Stage::class);
      }

}


    // public static function getResult($request){
    //     if ($request['student']=='all') {
    //         $results=self::with('Stage')->get();
    //         }elseif ($request['student']!='all') {
    //             $results=self::where('student_id',$request['student'])->with('Stage')->firstOrFail();
    //             }
    //             elseif (isset($request['date'])) {
    //                 $results=self::whereDate('created_at',$request['date'])->with('Stage')->get();

    //             }
    //             elseif (isset($request['month'])) {
    //                 $results=self::whereMonth('created_at',$request['month'])->with('Stage')->get();
    //                 }
    //                 elseif (isset($request['year'])) {
    //                     $results=self::whereYear('created_at',$request['year'])->with('Stage')->get();
    //                     }

