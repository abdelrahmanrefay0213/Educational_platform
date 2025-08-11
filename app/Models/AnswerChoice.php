<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerChoice extends Model
{
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
