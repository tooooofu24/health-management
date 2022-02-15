<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'bed_time' => 'datetime',
        'wakeup_time' => 'datetime',
        'date' => 'date'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    protected function formatAnswer(?bool $answer)
    {
        return $answer ? 'あり' : 'なし';
    }

    public function getQ1Attribute($value)
    {
        return $this->formatAnswer($value);
    }

    public function getQ2Attribute($value)
    {
        return $this->formatAnswer($value);
    }
    public function getQ3Attribute($value)
    {
        return $this->formatAnswer($value);
    }
    public function getQ4Attribute($value)
    {
        return $this->formatAnswer($value);
    }
    public function getQ5Attribute($value)
    {
        return $this->formatAnswer($value);
    }
}
