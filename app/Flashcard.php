<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Flashcard extends Model
{
      public function testRawQuery()
      {
        $flashcards = DB::table('flashcards')
        ->selectRaw('select * from flashcards');
        return $flashcards;  
      }
}