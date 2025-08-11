<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestBank extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function testAttempts()
    {
        return $this->hasMany(TestAttempt::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
