<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_name', 'organization_name','student_address','student_id','batch_id','student_photo'];
    use HasFactory;

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }
}
