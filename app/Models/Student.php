<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function class()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
