<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];
    protected $primaryKey = 'categories_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
