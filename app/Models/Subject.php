<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assignment;

class Subject extends Model
{
    protected $fillable = ['id', 'descriptions','book_name','abstract','subject_photo'];
    use HasFactory;

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
