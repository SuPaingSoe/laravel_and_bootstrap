<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\Subject;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\MBAController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OldQuestionsController;
use App\Http\Controllers\PapersController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ReplyController;

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
    return view('/auth.login');
});

Route::get('/post_login', function () {
    return view('/mainpage');
});

// Route::get('/comments', function () {
//     return view('/q&a.qacomment');
// });

Route::get('/registerquestions', [OldQuestionsController::class,'index']);
Route::get('/oldquestionslist', [OldQuestionsController::class,'show']);
Route::get('/oldquestionslistedit', [OldQuestionsController::class,'showadmin']);
Route::get('/admin/{oldquestion:id}/oldquestion/edit', [OldQuestionsController::class,'edit']);
Route::patch('/admin/{oldquestion:id}/oldquestion/update', [OldQuestionsController::class,'update']);
Route::post('/registerquestionscreate', [OldQuestionsController::class,'create']);
Route::get('/oldquestionsdownload/{oldquestion:id}', [OldQuestionsController::class,'downloadFile']);

Route::get('/registerpapers', [PapersController::class,'index']);
Route::get('/paperslist', [PapersController::class,'show']);
Route::get('/paperslistedit', [PapersController::class,'showadmin']);
Route::get('/admin/{paper:id}/paper/edit', [PapersController::class,'edit']);
Route::patch('/admin/{paper:id}/paper/update', [PapersController::class,'update']);
Route::post('/registerpaperscreate', [PapersController::class,'create']);
Route::get('/papersdownload/{paper:id}', [PapersController::class,'downloadFile']);

Route::get('/login', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'post_login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/teachers', [TeacherController::class,'index']);
Route::get('/teachersedit', [TeacherController::class,'showadmin']);
Route::get('/admin/{teacher:id}/teacher/edit', [TeacherController::class,'edit']);
Route::patch('/admin/{teacher:id}/teacher/update', [TeacherController::class,'update']);
Route::get('/registerlecturer', [TeacherController::class,'create']);
Route::post('/registerteacherstore', [TeacherController::class,'store']);
Route::get('/teachers/{teacher}', [TeacherController::class,'show']);
Route::post('/admin/{teacher:id}/delete', [TeacherController::class,'changestatusforsoftdelete']);

Route::get('/batches', [BatchController::class,'showbatch']);
Route::get('/batcheslist', [BatchController::class,'index']);
Route::get('/batches/{batch}', [BatchController::class,'show']);
Route::get('/registerbatch', [BatchController::class,'create']);
Route::post('/registerbatchstore', [BatchController::class,'store']);

Route::get('/subjectsandteachers', [MBAController::class,'mbajoin']);
Route::get('/registersubjectandteacher', [MBAController::class,'show']);
Route::post('/registersubjectandteacherstore', [MBAController::class,'store']);

Route::get('/subjects', [SubjectController::class,'showsubject']);
Route::get('/subjectslist', [SubjectController::class,'index']);
Route::get('/registersubject', [SubjectController::class,'register']);
Route::post('/registersubjectstore', [SubjectController::class,'store']);
Route::get('/admin/{subject:id}/subject/edit', [SubjectController::class,'edit']);
Route::patch('/admin/{subject:id}/subject/update', [SubjectController::class,'update']);
Route::get('/detailsubject/{subject:id}', [SubjectController::class,'showdetailsubject']);

Route::get('/admin/{batch:id}/batch/edit', [BatchController::class,'edit']);
Route::patch('/admin/{batch:id}/batch/update', [BatchController::class,'update']);


Route::get('/assignments', [AssignmentController::class,'show']);
Route::post('/assignmentupload', [AssignmentController::class,'store']);
Route::get('/assignmentsdownload/{subject:id}', [AssignmentController::class,'download']);
Route::get('/admin/{assignment:id}/assignment/edit', [AssignmentController::class,'edit']);
Route::get('/registerassignment', [AssignmentController::class,'index'])->middleware('admin');
Route::patch('/admin/{assignment:id}/assignment/update', [AssignmentController::class,'update']);
Route::get('/assignmentdownloadfile/{assignment:assignment_name}', [AssignmentController::class,'downloadFile']);


Route::post('/registerstudentstore', [StudentController::class,'store']);
Route::get('/admin/{student:id}/student/edit', [StudentController::class,'edit']);
Route::patch('/admin/{student:id}/student/update', [StudentController::class,'update']);
Route::get('/registerstudent', [StudentController::class,'index'])->middleware('admin');

Route::get('/registeruser', [UserController::class,'index'])->middleware('admin');
Route::get('/adminuserlist', [UserController::class,'show'])->middleware('admin');
Route::post('/sendinformation', [UserController::class,'sendinfo'])->middleware('admin');
Route::post('/registeruserstore', [UserController::class,'store'])->middleware('admin');
Route::get('/admin/{user:id}/user/edit', [UserController::class,'edit'])->middleware('admin');
Route::patch('/admin/{user:id}/user/update', [UserController::class,'update'])->middleware('admin');
Route::get('/infodistribution', [UserController::class,'informationdistributor'])->middleware('admin');
Route::post('/admin/{user:id}/delete', [UserController::class,'changestatusforsoftdelete']);

Route::get('/comments', [CommentsController::class,'index']);
Route::post('/registercomment', [CommentsController::class,'create']);

Route::post('/registercommentreply', [ReplyController::class,'create']);
