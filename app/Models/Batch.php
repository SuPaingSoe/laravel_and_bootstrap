<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'open_date', 'duration','exam_date'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
