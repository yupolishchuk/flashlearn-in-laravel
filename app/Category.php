<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Flashcard;

class Category extends Model
{
    public function flashcard()
    {
        return $this->hasMany('App\Flashcard'); //допустим связь один к одному (на самом деле неправильно)
    }
}