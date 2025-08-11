<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function test_attempt()
    {
        return $this->belongsTo(TestAttempt::class);
    }
}
