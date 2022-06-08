<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Subject;
use App\Models\Oldquestion;

class OldQuestionsController extends Controller
{
    public function index()
    {
        return view('oldquestions.registeroldquestion', [
            'subjects'=>Subject::all(),
            'batches'=>Batch::all(),
        ]);
    }

    public function showadmin()
    {
        return view('admin.adminoldquestionslist', [
            'oldquestions'=>Oldquestion::paginate(5)]);
    }

    public function show()
    {
        return view('oldquestions.oldquestionslist', [
            'oldquestions'=>Oldquestion::paginate(5)]);
    }

    public function edit(Oldquestion $oldquestion)
    {
        return view('admin.admineditoldquestion', [
            'oldquestion'=>$oldquestion
        ]);
    }

    public function create()
    {
        $formData=request()->validate([
            'sltbatch_id'=>['required'],
            'sltsubject_id'=>['required'],
            'sltsubject_descriptions'=>['required'],
            'oldquestions'=>['required'],
            'examdate'=>['required']
            ], [
                'sltbatch_id.required'=>'Batch ID need to enter',
                'sltsubject_id.required'=>'Subject ID need to enter',
                'sltsubject_descriptions.required'=>'Subject description need to enter',
                'oldquestions.required'=>'Old questions attached file need to enter',
                'examdate.required'=>'Exam date need to enter'
            ]);
        
        $formData['batch_id'] = request()->sltbatch_id;
        $formData['subject_id'] = request()->sltsubject_id;
        $formData['subject_descriptions'] = request()->sltsubject_descriptions;
        $formData['exam_date'] = request()->examdate;
        $formData['questions']=request()->file('oldquestions')->store('thumbnails');

        Oldquestion::create($formData);
        return redirect('/oldquestionslist');
    }

    public function update(Oldquestion $oldquestion)
    {
        $formData=request()->validate([
            'sltbatch_id'=>['required'],
            'sltsubject_id'=>['required'],
            'sltsubject_descriptions'=>['required'],
            'examdate'=>['required']
            ], [
                'sltbatch_id.required'=>'Batch ID need to enter',
                'sltsubject_id.required'=>'Subject ID need to enter',
                'sltsubject_descriptions.required'=>'Subject description need to enter',
                'examdate.required'=>'Exam date need to enter'
            ]);

        $formData['batch_id'] = request()->sltbatch_id;
        $formData['subject_id'] = request()->sltsubject_id;
        $formData['subject_descriptions'] = request()->sltsubject_descriptions;
        $formData['exam_date'] = request()->examdate;
        if (is_null(request()->file('oldquestions'))) {
            $formData['questions'] = $oldquestion->questions;
        } else {
            $formData['questions']=request()->file('oldquestions')->store('thumbnails');
        }
 
        $oldquestion->update($formData);
        return redirect('/oldquestionslistedit');
    }

    public function downloadFile(Oldquestion $oldquestion)
    {
        $file=$oldquestion->questions;
        $filename=$oldquestion->subject_descriptions."(".$oldquestion->exam_date.")";
        $path = public_path('\storage\\'.$file);
        return response()->download($path, $filename);
    }
}
