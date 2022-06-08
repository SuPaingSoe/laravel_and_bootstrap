<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $fillable = ['batch_id', 'student_id','paper_title','paper','finished_date'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
