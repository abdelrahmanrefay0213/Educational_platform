<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerChoices()
    {
        return $this->hasMany(AnswerChoice::class);
    }
    public function studentAnswers()
    {
        return $this->hasMany(StudentAnswer::class);
    }
    public function testBank()
    {
        return $this->belongsTo(TestBank::class);
    }
}
