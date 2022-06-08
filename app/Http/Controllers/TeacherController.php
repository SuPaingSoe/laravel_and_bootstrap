<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('lecturer.teachers', [
        'teachers'=>Teacher::paginate(5)]);
    }

    public function create()
    {
        return view('lecturer.registerlecturer');
    }

    public function show(Teacher $teacher)
    {
        return view('lecturer.teacherdetail', [
        'teacher'=>$teacher]);
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.editlecturer', [
            'teacher'=>$teacher
        ]);
    }

    public function showadmin()
    {
        return view('admin.admineditlecturer', [
            'teachers'=>Teacher::paginate(5)]);
    }

    public function store()
    {
        $formData=request()->validate([
            "lecturername"=>["required"],
            "profile"=>["required"]
            ], [
                'lecturername.required'=>'Lecturer name need to enter',
                'profile.required'=>'Profile need to enter',
            ]);
        
        $formData['teacher_name']=request()->lecturername;
        $formData['profile']=request()->profile;
        $formData['join_date']=request()->joindate;
        $formData['lecturer_photo']=request()->file('lecturerthumbnail')->store('thumbnails');

        Teacher::create($formData);
        return redirect('/post_login');
    }

    public function update(Teacher $teacher)
    {
        $formData=request()->validate([
            'lecturername'=>['required'],
            'profile'=>['required']
            ], [
                'lecturername.required'=>'Lecturer name need to enter',
                'profile.required'=>'Profile need to enter',
            ]);
        $formData['teacher_name']=request()->lecturername;
        $formData['profile']=request()->profile;
        $formData['join_date']=request()->joindate;
        if (is_null(request()->file('lecturerphoto'))) {
            $formData['lecturer_photo'] = $teacher->lecturer_photo;
        } else {
            $formData['lecturer_photo']=request()->file('lecturerphoto')->store('thumbnails');
        }
        $teacher->update($formData);
        return redirect('/post_login');
    }

    public function changestatusforsoftdelete(Teacher $teacher)
    {
        $teacher = Teacher::find($teacher->id);
        $teacher->status = '1';

        $teacher->save();
        return redirect('/post_login');
    }
}
