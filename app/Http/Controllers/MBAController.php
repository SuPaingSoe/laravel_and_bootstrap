<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\MBA;

class MBAController extends Controller
{
    public function show()
    {
        return view('subject.registrationsubjectsandteachers', [
            'subjects'=>Subject::all(),
            'teachers'=>Teacher::all(),
            'batches'=>Batch::all()
        ]);
    }

    public function store()
    {
        $formData['batch_id']=request('sltbatch');
        $formData['teacher_id']=request('sltteacherid');
        $formData['sub_id']=request('sltsubjectcode');
        // dd($formData);
        MBA::create($formData);
        return redirect('/post_login');
    }

    public function mbajoin()
    {
        $data = MBA::join('subjects', 'subjects.id', '=', 'm_b_a_s.sub_id')
                        ->join('batches', 'batches.id', '=', 'm_b_a_s.batch_id')
                        ->join('teachers', 'teachers.id', '=', 'm_b_a_s.teacher_id')
                        -> get(['m_b_a_s.batch_id','m_b_a_s.sub_id','m_b_a_s.teacher_id','subjects.descriptions','subjects.book_name','teachers.teacher_name','teachers.profile','batches.open_date']);

        return view('subject.subjectsandteachersdetail', compact('data'));
    }
}
