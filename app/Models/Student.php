<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function testAttempts()
    {
        return $this->hasMany(TestAttempt::class);
    }

    public function progress()
    {
        return $this->hasMany(StudentProgress::class);
    }
}
