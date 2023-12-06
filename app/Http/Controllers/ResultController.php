<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResultRequest $request)

        {
            $student = Student::find($request->student_id);
            $student->test()->attach($request->subject_id, $request->only('degree', 'test_type_id') + [
                'stage_id' => $student->stage_id,
            ]);

            return true;

        }
        function test()
    {
        return $this->belongsToMany(Student::class, 'tests')
        ->withPivot('id', 'student_id', 'subject_id', 'stage_id', 'test_type_id', 'degree')
        ->withTimestamps();
    }
    function avarage(Request $request)
    {
        $student = Student::find($request->student_id);
        $tests = $student->test()
        ->get();

        return $tests;
    }
    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
