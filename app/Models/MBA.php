<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBA extends Model
{
    use HasFactory;
    protected $fillable = ['batch_id', 'teacher_id','sub_id'];
    protected $table='m_b_a_s';

}
