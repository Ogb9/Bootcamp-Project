<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormRegStudent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostoStudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\employeeController;
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


class Bus{
    public $occupiedSeats;
    public $capacity;
    public $waiting;

    function __construct($occupiedSeats, $capacity, $waiting) {
        $this->occupiedSeats = $occupiedSeats;
        $this->capacity = $capacity;
        $this->waiting = $waiting;
        $this->freeSeats = $capacity - $occupiedSeats;
    }

    function validate(){
        if ($this->occupiedSeats > $this->capacity){
            exit ("Error, Number of occupied seats cannot be greater than capacity of Bus");
        }
    }

    function getInfo(){
        if ($this->waiting <= $this->freeSeats){
            $this->freeSeats = $this->freeSeats - $this->waiting;
            return "Number of empty seats is: ".$this->freeSeats;
        }
        elseif ($this->freeSeats < $this->waiting){
            $this->waiting = abs($this->freeSeats - $this->waiting);
            return "Bus FULL, Number of waiting passengers is: ". $this->waiting;
        }
    }
}




Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/posts', PostoStudentController::class);
Route::resource('/details', employeeController::class);



Route::get('/movies', function () {
    return view('/simplevue');
});

Route::get('/index', function () {
    return view('movies/show');
});
Route::get('/studentlogin', function () {
    return view('project/studentloginpage');
})->name('studentloginpage');
Route::get('/lecturerlogin', function () {
    return view('project/lecturerlogin');
})->name('lecturerloginpage');
// Route::get('/studentpagehome', function () {
//     return view('project/studentpagehome');
// })->name('studentIndex'); 
Route::get('/lecturerpagehome', function () {
    return view('project/lecturerpagehome');
})->name('lecturerIndex');
Route::get('/commentPage', function () {
    return view('project/widgets/CommentForm');
})->name('commentForm');

// Route::get('/project', [FormRegStudent::class, 'index'])->name('index');


Route::get('/formz', [FormRegStudent::class, 'createAccountS'])->name('formz');

Route::get('/susers/create', [sListController::class, 'create'])->name('susers.create');
Route::get('/susers', [sListController::class, 'index'])->name('susers');

Route::post('/slistAction', [sListController::class, 'store'])->name('slistAction');
Route::post('/susers/show', [sListController::class, 'show'])->name('susers.show');

// Route::resource('/slist', 'sListController');

Route::get('/commentz', function () {
    return view('project/widgets/Commentz');
})->name('commentz');

Route::post('/postSdetails', function (Request $request) {
    // $formInfo = $request->all();
    // $FirstName = $formInfo['FN'];
    // $LastName = $formInfo['LN'];
    // $username = $formInfo['UN'];
    // $password = $formInfo['PW'];
    // $regNo = $formInfo['RN'];
    // $Modules = $formInfo['MS'];

    // return 'Modules taken: '.$Modules;
    // return 'Last Name: '.$LastName;
    $modules = $request->input('MS');
    // return $modules;
        foreach ($modules as $module)
            {return 'This is your registered modules: '.$module;}
})->name('sInfo');


Route::get('users/{id}', function ($id) {
    return 'Users: '.$id;
});
Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
  return 'Post: '.$postId;
  return 'Comment: '.$commentId;
});


Route::get('/dogs/{num}', function($num) {
    $max = 10;
    return view('dogs', compact('num','max'));
});

Route::get('/form', function () {
    return view('project/form');
})->name('form');

Route::post('/postform', function (Request $request) {
    $formInfo = $request->all();
    $capacity = $formInfo['Cb'];
    $occupiedSeats = $formInfo['Os'];
    $waiting = $formInfo['Wp'];

    $FirstBus = new Bus($occupiedSeats, $capacity, $waiting);
    $FirstBus->validate();
    return $FirstBus->getInfo();
})->name('formInfo');





// Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// // show form
// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// // handle new student form
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Route::get('/students/show', [StudentController::class, 'show'])->name('students.show');








Route::get('/project', [Controller::class, 'index'])->name('index');

Route::get('/students/create', [Controller::class, 'create'])->name('students.create');

Route::post('/students', [Controller::class, 'store'])->name('students.store');

Route::get('/home', [Controller::class, 'showHome'])->name('sHomepage');

Route::get('project/lecturerpagehome', [Controller::class, 'showLpage'])->name('lHomepage');

Route::get('/modules/{module}/posts/create', [PostController::class, 'createForModule'])->name('posts.create');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/logout', function () {
    return view('project/index');
})->middleware(['auth'])->name('logout');


















// Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
//     return view('auth/register');
// })->name('register');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('auth/login');
// })->name('login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('project/studentpagehome');
// })->name('register');
