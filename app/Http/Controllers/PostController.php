<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
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
    public function createForModule(Module $module)
    {
        
        $course = $module->title;
        $courseId = $module->id;
        // return a view, in the view we have a form with action to hit
        // route('posts.store', $module)
        return view('project/commentForm', ['course'=>$course, 'courseId'=>$courseId]);
    }

    public function storeForModule(Module $module, Request $request)
    {
        
        
        $input = $request->validate([
            'sFeedback' => 'required_without:lFeedback',
            'lFeedback' => 'required_without:sFeedback'
        ]);
        $user = Auth::user();
        $module->posts()->create([
            'user_id' => $user->id,
            'module_id' => $module->id,
            'sFeedback' => $request->get('sFeedback'),
            'lFeedback'=> $request->get('lFeedback'),
        ]);
        return redirect('/home')->with('status', 'Comment received!');
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function showCommentsForStudents(Module $module)
    {
        $course = $module->title;
        $courseId = $module->id;
        $post = DB::table('posts')->where ('module_id','=', $courseId)->get();
        return view('project/CommentsForStudents', ['allPosts' => $post, 'course'=>$course, 'courseId'=>$courseId]);
    }
    public function showCommentsForLecturer(Module $module)
    {
        $course = $module->title;
        $courseId = $module->id;
        $post = DB::table('posts')->where ('module_id','=', $courseId)->get();
        return view('project/commentsForLecturer', ['allPosts' => $post, 'course'=>$course, 'courseId'=>$courseId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


}
