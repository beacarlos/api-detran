<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['description'];
    protected $primaryKey = 'questions_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
