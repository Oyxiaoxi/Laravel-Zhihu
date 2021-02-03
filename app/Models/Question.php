<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // 这里也放开了属性保护
    protected $guarded = ['id'];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function markAsBestAnswer($answer)
    {
        $this->update([
            'best_answer_id' => $answer->id
        ]);
    }
}
