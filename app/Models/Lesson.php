<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function testBank()
    {
        return $this->belongsTo(TestBank::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function studentProgress()
    {
        return $this->hasMany(StudentProgress::class);
    }
}
