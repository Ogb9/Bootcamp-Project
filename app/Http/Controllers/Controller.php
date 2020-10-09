<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function index(){
  	    return view('project/index');
    }
    // public function index(){
    //     $students = User::all();
  	//     return view('project/index', compact('students'));
    // }
 

    /**
     * Show the home page view, appropriate for the current user's type
     */
    public function showHome() {
    
        
        // Get the currently authenticated user...
        $user = Auth::user();

        $homeView = $this->getHomeView($user);

        return view($homeView, compact('user'));
    }

    /**
     * Return the template path, suitable for the given user.
     */
    private function getHomeView(User $user)
    {
        $basePath = 'project/homepages/';

        return $basePath . strtolower($user->userType->role);
    }

    // Show the form for creating a new Student
    public function create()
    {
        return view('/register');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'full_name' => 'required|min:3|max:100',
            'reg_no' => 'required|min:3',
            'username' => 'required|unique:students|min:3|max:100',
            'password' => 'required|min:1|max:80'
        ]);

        $student = User::create($input);

        return redirect($student->url());
    }

    public function showLpage(User $user){
        $user = User::find(1);
        
       
        return view('project/homepages/lecturer', compact('user'));
    }



}

