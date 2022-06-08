<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Batch;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.registrationstudent', [
            'batchs'=>Batch::all()]);
    }

    public function edit(Student $student)
    {
        return view('admin.admineditstudent', [
            'student'=>$student
        ]);
    }

    public function store()
    {
        $formData=request()->validate([
            'studentname'=>['required'],
            'organizationname'=>['required'],
            'studentaddress'=>['required'],
            'sltbatchname'=>['required']
            ], [
                'studentname.required'=>'Student name need to enter',
                'organizationname.required'=>'Organizaiton name need to enter',
                'studentaddress.required'=>'Student address need to enter',
                'sltbatchname.required'=>'Batch Id need to enter'
            ]);

        $formData['student_name']=request('studentname');
        $formData['organization_name']=request('organizationname');
        $formData['student_address']=request('studentaddress');
        $formData['batch_id']=request('sltbatchname');
        $formData['student_photo']=request()->file('thumbnail')->store('thumbnails');
        // dd($formData);
        Student::create($formData);
        return redirect('/post_login');
    }

    public function update(Student $student)
    {
        $formData=request()->validate([
            'studentname'=>['required'],
            'organizationname'=>['required'],
            'studentaddress'=>['required'],
            'batchid'=>['required']
            ], [
                'studentname.required'=>'Student name need to enter',
                'organizationname.required'=>'Organizaiton name need to enter',
                'studentaddress.required'=>'Student address need to enter',
                'batchid.required'=>'Batch Id need to enter'
            ]);

        $formData['student_name'] = request()->studentname;
        $formData['organization_name'] = request()->organizationname;
        $formData['student_address'] = request()->studentaddress;
        $formData['batch_id'] = request()->batchid;
        if (is_null(request()->file('photos'))) {
            $formData['student_photo']=$student->student_photo;
        } else {
            $formData['student_photo']=request()->file('photos')->store('thumbnails');
        }

        $student->update($formData);
        return redirect('/post_login');
    }
}
