<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Student;
use\App\Models\User;
use\App\Models\Module;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
  	    return view('students/index', compact('students'));
    }
 
    // public function show(Student $student){
    //     return $student->full_name;
    // }

    // public function show(Student $student){
    //     $student = Student::find(1);
    //     $user = Auth::user();
    //     $name = $user->name;


    //     return view('students/show', compact('student','name'));
    // }

    public function show(Student $student){
        $student = Student::find(1);



        return view('students/show', compact('student'));
    }

    // Show the form for creating a new Student
    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'full_name' => 'required|min:3|max:100',
            'reg_no' => 'required|min:3',
            'username' => 'required|unique:students|min:3|max:100',
            'password' => 'required|min:1|max:80'
        ]);

        $student = Student::create($input);

        return redirect($student->url());
    }
}
