<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['description'];
    protected $primaryKey = 'answers_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function question()
    {
        return $this->belongsTo('App\Question', 'questions_id', 'questions_id');
    }
}
