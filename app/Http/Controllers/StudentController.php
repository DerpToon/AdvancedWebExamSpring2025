<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\HasFactory;
use Illuminate\Http\Request;

class StudentControlller extends Controller
{
    /**
         * Display a listing of the resource.
         */
    public function index()
    {
        $students = Student::all();

        return view('students.students',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     */
 


    /**
     * Store a newly created resource in storage.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */



    /**
     * Remove the specified resource from storage.
     */
 

    public function search(Request $request){
        if($request->ajax()){
            $output = '';
            $students = Student::where('name','LIKE','%'.$request->search.'%')->get();

            if($students){
                foreach($students as $students){
                    $output.= '<li>
                               '.$students->name.'
                               (Age:'.$students->age.')
                               </li>';
                            }
                return response()->json($output);
            }
        }
        return view('students.students');
    }
}
