<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suser;

class FormRegStudent extends Controller
{
    public function index(){
        return view ('project/index');
    }  
    public function createAccountS(){
        return view ('project/widgets/formz');
    } 
    
    public function store(Request $request) {
        suser::create([
          'First_Name' => $request->get('FN'),
          'Last_Name' => $request->get('LN'),
          'RegNo' => $request->get('RN'),
        ]);

        return redirect('/slist');
    }

    public function student(){
        $susers = suser::all();
        return view('project/slist', ['allSusers'=>$susers]);
    }
}
