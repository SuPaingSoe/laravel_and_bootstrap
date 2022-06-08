<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BatchController extends Controller
{
    public function showbatch()
    {
        return view('batch.batches', [
        'batches'=>Batch::paginate(5)]);
    }

    public function index()
    {
        return view('batch.batchlist', [
        'batches'=>Batch::paginate(5)]);
    }

    public function edit(Batch $batch)
    {
        return view('admin.editbatch', [
            'batch'=>$batch
        ]);
    }

    public function create()
    {
        return view('batch.registerbatch');
    }

    public function show(Batch $batch)
    {
        return view('batch.batchatstudents', [
        'batches'=>$batch->students]);
    }

    public function store(Batch $batch)
    {
        $formData=request()->validate([
            'opendate'=>['required'],
            'batchid'=>['required', Rule::unique('batches', 'id')->ignore($batch->id)],
            'duration'=>['required'],
            'examdate'=>['required']
            ], [
                'opendate.required'=>'Open date need to enter',
                'batchid.required'=>'Batch ID need to enter',
                'duration.required'=>'Duration need to enter',
                'examdate.required'=>'Exam date need to enter'
            ]);
        
        $formData['id']=request()->batchid;
        $formData['open_date']=request()->opendate;
        $formData['duration']=request()->duration;
        $formData['exam_date']=request()->examdate;

        $batch->create($formData);
        return redirect('/post_login');
    }

    public function update(Batch $batch)
    {
        $formData=request()->validate([
            'opendate'=>['required'],
            'batchid'=>['required', Rule::unique('batches', 'id')->ignore($batch->id)],
            'duration'=>['required'],
            'examdate'=>['required']
            ], [
                'opendate.required'=>'Open date need to enter',
                'batchid.required'=>'Batch ID need to enter',
                'duration.required'=>'Duration need to enter',
                'examdate.required'=>'Exam date need to enter'
            ]);
        
        $formData['id']=request()->batchid;
        $formData['open_date']=request()->opendate;
        $formData['duration']=request()->duration;
        $formData['exam_date']=request()->examdate;

        $batch->update($formData);
        return redirect('/batches');
    }
}
