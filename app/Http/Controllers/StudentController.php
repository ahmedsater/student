<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $a=Student::with(['stage','gender','Result','city'])->get();

        return$a;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // ==========
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'. $file->extension();
            $file->move(public_path('upload'), $fileName);
        }


        // ==========
        $student =[
            'name'=>$request->name,
            'birthday'=>$request->birthday,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
            'gender_id'=>$request->gender_id,
            'stage_id'=>$request->stage_id,
            'image' => $fileName ?? null,
            'email'=>$request->email,
        ];
        Student::create($student);
        return $student;
       }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // ==========
        $student = Student::findOrFail($id);
        $imagePath = $student->image;
        // dd(!$request->hasFile('image'));
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'. $file->extension();
            $file->move(public_path('upload'), $fileName);
            $imagePath=$fileName;
        }
        // dd($imagePath);
        $student->update([
            'name'=>$request->name,
            'birthday'=>$request->birthday,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
            'gender_id'=>$request->gender_id,
            'stage_id'=>$request->stage_id,
            'image' => $imagePath,
            'email'=>$request->email,
         ]);

        return $student;
       }
       function getImageAttribute($image)
    {
        if($image != null) {
            return asset('upload/'.$image);
        }

        return null;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
