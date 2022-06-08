<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Student;
use App\Models\Paper;

class PapersController extends Controller
{
    public function index()
    {
        return view('papers.registerpaper', [
            'students'=>Student::all(),
            'batches'=>Batch::all(),
        ]);
    }

    public function show()
    {
        return view('papers.paperslist', [
            'papers'=>Paper::paginate(5)]);
    }

    public function edit(Paper $paper)
    {
        return view('admin.admineditpaper', [
            'paper'=>$paper,
            'student'=>$paper->student
        ]);
    }

    public function showadmin()
    {
        return view('admin.adminpaperslist', [
            'papers'=>Paper::paginate(5)]);
    }

    public function create()
    {
        $formData=request()->validate([
            'sltbatch_id'=>['required'],
            'sltstudent_id'=>['required'],
            'papertitle'=>['required'],
            'papers'=>['required'],
            'finisheddate'=>['required']
            ], [
                'sltbatch_id.required'=>'Batch ID need to enter',
                'sltstudent_id.required'=>'Student ID need to enter',
                'papertitle.required'=>'Paper title need to enter',
                'papers.required'=>'Paper need to attach',
                'finisheddate.required'=>'Finished date need to enter'
            ]);
        
        $formData['batch_id'] = request()->sltbatch_id;
        $formData['student_id'] = request()->sltstudent_id;
        $formData['paper_title'] = request()->papertitle;
        $formData['finished_date'] = request()->finisheddate;
        $formData['paper']=request()->file('papers')->store('thumbnails');
        Paper::create($formData);
        return redirect('/paperslist');
    }

    public function update(Paper $paper)
    {
        $formData=request()->validate([
            'sltbatch_id'=>['required'],
            'sltstudent_id'=>['required'],
            'papertitle'=>['required'],
            'papers'=>['required'],
            'finisheddate'=>['required']
            ], [
                'sltbatch_id.required'=>'Batch ID need to enter',
                'sltstudent_id.required'=>'Student ID need to enter',
                'papertitle.required'=>'Paper title need to enter',
                'papers.required'=>'Paper need to attach',
                'finisheddate.required'=>'Finished date need to enter'
            ]);

        $formData['batch_id'] = request()->sltbatch_id;
        $formData['student_id'] = request()->sltstudent_id;
        $formData['paper_title'] = request()->papertitle;
        $formData['finished_date'] = request()->finisheddate;

        if (is_null(request()->file('papers'))) {
            $formData['paper'] = $paper->paper;
        } else {
            $formData['paper']=request()->file('papers')->store('thumbnails');
        }

        $paper->update($formData);
        return redirect('/post_login');
    }

    public function downloadFile(Paper $paper)
    {
        $file=$paper->paper;
        $filename=$paper->paper_title;
        $path = public_path('\storage\\'.$file);
        return response()->download($path, $filename);
    }
}
