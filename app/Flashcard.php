<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Category;

class Flashcard extends Model
{
    public function category()
    {
     // return $this->hasOne('Category');
     return $this->belongsTo('Category');
    }

    public function testRawQuery()
    {
      $flashcards = DB::table('flashcards')
      ->selectRaw('*')
      ->get();
      return $flashcards; 
    }
}