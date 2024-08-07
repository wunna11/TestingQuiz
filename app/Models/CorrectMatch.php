<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectMatch extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'left_option_id', 'right_option_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function leftOption()
    {
        return $this->belongsTo(Option::class, 'left_option_id');
    }

    public function rightOption()
    {
        return $this->belongsTo(Option::class, 'right_option_id');
    }
}
