<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Batch;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Assignment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    //
    public function index()
    {
        return view('assignments.registerassignment', [
            'teachers'=>Teacher::all(),
            'subjects'=>Subject::all(),
            'batches'=>Batch::all(),
            'students'=>Student::all()
        ]);
    }

    public function edit(Assignment $assignment)
    {
        return view('admin.admineditassignment', [
            'assignment'=>$assignment
        ]);
    }

    public function store()
    {
        $formData=request()->validate([
            'assignmentname'=>['required'],
            'deadline'=>['required'],
            'thumbnail'=>['required']
            ], [
                'deadline.required'=>'Deadline should be.',
                'assignmentname.required'=>'Assignment Name should be.',
                'thumbnail.required'=>'Assignment file should be.'
            ]);
            
        $type=request()->file('thumbnail')->getClientOriginalExtension();
        $formData['subject_id']=request('sltsubjectcode');

        $formData['student_id']=request('sltstudentid');
        $formData['subject_name']=request('sltsubjectname');
        $formData['teacher_name']=request('sltteachername');
        $formData['assignment_name']=request('assignmentname');

        $formData['assignment']=request()->file('thumbnail')->store('thumbnails');
        $formData['batch_id']=request('sltbatch');
        $formData['deadline']=request('deadline');
        Assignment::create($formData);
        return redirect('/post_login');
    }

    public function show()
    {
        return view('assignments.assignments', [
            'subjects'=>Subject::all(),
            'assignments'=>Assignment::all()
        ]);
    }

    public function update(Assignment $assignment)
    {
        $formData=request()->validate([
            'sltbatch_id'=>['required'],
            'sltsubject_name'=>['required'],
            'sltstudent_id'=>['required'],
            'sltlecturer_name'=>['required'],
            'sltassignment_name'=>['required'],
            'sltdeadline'=>['required'],
            ], [
                'sltbatch_id.required'=>'Batch ID should be.',
                'sltsubject_name.required'=>'Subject Name should be.',
                'sltstudent_id.required'=>'Student ID should be.',
                'sltlecturer_name.required'=>'Lecturer Name should be.',
                'sltassignment_name.required'=>'Assignment Name should be.',
                'sltdeadline.required'=>'Deadlin should be.'
            ]);
            
        $formData['batch_id']=request('sltbatch_id');
        $formData['subject_name']=request('sltsubject_name');
        $formData['student_id']=request('sltstudent_id');
        $formData['subject_id']=request('sltsubject_id');
        $formData['teacher_name']=request('sltlecturer_name');
        $formData['assignment_name']=request('sltassignment_name');
        $formData['deadline']=request('sltdeadline');
        if (is_null(request()->file('assignment'))) {
            $formData['assignment'] = $assignment->assignment;
        } else {
            $formData['assignment']=request()->file('assignment')->store('thumbnails');
        }

        $assignment->update($formData);
        return redirect('/post_login');
    }


    public function download(Subject $subject)
    {
        return view('assignments.assignmentdownload', [
            'assignments'=>$subject->assignments]);
    }


    public function downloadFile(Assignment $assignment)
    {
        $file=$assignment->assignment;
        $filename=$assignment->assignment_name;

        $path = public_path('\storage\\'.$file);
        return response()->download($path, $filename);
    }
}
