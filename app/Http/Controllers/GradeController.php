<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Grade;
use App\Models\Module;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $user = Auth::user();
        // return $module->grades;
        
        $grade = $user->gradeFor($module);
        
        return view('project/viewGrade', compact('module', 'user', 'grade'));
    }
    public function showAverage(Module $module)
    {
        
        $minGrade = DB::table('grades')->where('module_id',$module->id)->min ('score');
        $maxGrade = DB::table('grades')->where('module_id',$module->id)->max ('score');
        $avgGrade = DB::table('grades')->where('module_id',$module->id)->avg ('score');
        return view('project/AverageGrade', ['avgGrade' => $avgGrade, 'module'=>$module->title, 'maxGrade'=>$maxGrade, 'minGrade'=>$minGrade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
