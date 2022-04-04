<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function getNameAttribute()
    {
        return "{$this->grade}年{$this->class}組";
    }

    // 学年を一つ繰り上げるメソッド
    public function updateGrade()
    {
        if ($this->grade >= 3) {
            // 最高学年は削除（論理削除）
            $this->delete();
        } else {
            // 在校生の学年は一つ繰り上げる
            $this->grade = $this->grade + 1;
            $this->save();
        }
        return;
    }
}
