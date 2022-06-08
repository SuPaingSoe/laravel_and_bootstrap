<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oldquestion extends Model
{
    use HasFactory;
    protected $fillable = ['batch_id', 'subject_id','subject_descriptions','questions','exam_date'];
}
