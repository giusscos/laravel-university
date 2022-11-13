<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'period',
        'year',
        'cfu',
    ];

    public function exams () {
        return $this->hasMany('App\Exmas');
    }
}
