<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Validation\Rule;

class SubjectController extends Controller
{
    public function showsubject()
    {
        return view('subject.subjectdetail', [
            'subjects'=>Subject::paginate(5)]);
    }

    public function showdetailsubject(Subject $subject)
    {
        return view('subject.detailsubject', [
            'subject'=>$subject]);
    }

    public function index()
    {
        return view('subject.subjectlist', [
            'subjects'=>Subject::paginate(5)]);
    }

    
    public function register()
    {
        return view('subject.registersubject');
    }

    public function edit(Subject $subject)
    {
        return view('admin.editsubject', [
            'subject'=>$subject
        ]);
    }

    public function store()
    {
        $formData=request()->validate([
            'subjectcode'=>['required', Rule::unique('subjects', 'id')],
            'subjectname'=>['required'],
            'bookname'=>['required'],
            'txtabstract'=>['required','max:255'],
            'subjectthumbnail'=>['required']
            ], [
                'subjectcode.required'=>'Subject Code should be.',
                'subjectname.required'=>'Subject name should be.',
                'bookname.required'=>'Book name should be.',
                'txtabstract.required'=>'Abstract should be.',
                'subjectthumbnail.required'=>'Subject photo should be.'
            ]);
        
        $formData['id']=request()->subjectcode;
        $formData['descriptions']=request()->subjectname;
        $formData['book_name']=request()->bookname;
        $formData['abstract']=request()->txtabstract;
        $formData['subject_photo']=request()->file('subjectthumbnail')->store('thumbnails');

        Subject::create($formData);
        return redirect('/post_login');
    }

    public function update(Subject $subject)
    {
        $formData=request()->validate([
            'subjectcode'=>['required'],
            'subjectname'=>['required', Rule::unique('subjects', 'id')->ignore($subject->id)],
            'bookname'=>['required']
            ], [
                'subjectcode.required'=>'Subject Code should be.',
                'subjectname.required'=>'Subject name should be.',
                'bookname.required'=>'Book name should be.'
            ]);
        
        $formData['id']=request()->subjectcode;
        $formData['descriptions']=request()->subjectname;
        $formData['book_name']=request()->bookname;
        if (is_null(request()->file('subjectphoto'))) {
            $formData['subject_photo'] = $subject->subjectphoto;
        } else {
            $formData['subject_photo']=request()->file('subjectphoto')->store('thumbnails');
        }

        $subject->update($formData);
        return redirect('/post_login');
    }
}
