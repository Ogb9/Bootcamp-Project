<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Controller;

use App\Http\Controllers\PostController;

use App\Http\Controllers\GradeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    return view('welcome');
})->name('home');






Route::get('/project', [Controller::class, 'index'])->name('index');

Route::get('/students/create', [Controller::class, 'create'])->name('students.create');

Route::post('/students', [Controller::class, 'store'])->name('students.store');

Route::get('/home', [Controller::class, 'showHome'])->name('sHomepage');

Route::get('project/homepages/lecturer', [Controller::class, 'showLpage'])->name('lHomepage');

Route::get('/modules/{module}/posts/create', [PostController::class, 'createForModule'])->name('posts.create');

Route::get('/modules/{module}/posts/store', [PostController::class, 'storeForModule'])->name('posts.store');

Route::get('/modules/{module}/posts/showCommentsForStudents', [PostController::class, 'showCommentsForStudents'])->name('posts.showCommentsForStudents');

Route::get('/modules/{module}/posts/showCommentsForLecturer', [PostController::class, 'showCommentsForLecturer'])->name('posts.showCommentsForLecturer');

Route::get('/modules/{module}/grade', [GradeController::class, 'show'])->name('modules.grade.show');
Route::get('/modules/{module}/gradeAverage', [GradeController::class, 'showAverage'])->name('modules.avgGrade.show');

Route::resource('grades', GradeController::class);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');




Route::get('/logout', function () {
    return redirect('/project');
})->middleware(['auth'])->name('logout');


















