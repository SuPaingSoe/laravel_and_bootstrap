<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Assignment extends Model
{
    protected $fillable = ['student_id','batch_id', 'deadline', 'subject_id','assignment_name', 'subject_name','teacher_name','assignment'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
