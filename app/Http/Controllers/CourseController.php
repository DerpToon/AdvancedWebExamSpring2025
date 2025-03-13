<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\HasFactory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
         * Display a listing of the resource.
         */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index',compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::create(['name' => $request->name,
        'description' => $request->description,
    ]);

        return redirect()->route('courses.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
  


    /**
     * Update the specified resource in storage.
     */



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }

    
}
