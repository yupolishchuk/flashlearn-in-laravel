<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminamte\Http\Request;

class LearnController extends Controller
{
  // Итерируемся через все категории подряд
  public function giveCard($cardId)
  {
    $flashcard = Flashcard::find($cardId);
    $prev = Flashcard::where('id', '<', $cardId)->orderBy('id', 'desc')->first();// это можно сделать рациональнее?
    $next = Flashcard::where('id', '>', $cardId)->first();

    return view('learn.learn', compact('flashcard'))
      ->with('next', $next)
      ->with('prev', $prev);
  }

  public function learnByCategory($catId=null, $cardId=null) {
    if ($cardId == null) {
      $firstCard = Flashcard::where('category_id', '=', $catId)->first();
      // dd($firstCard->id);
      header("Location: /learn/$catId/$firstCard->id");
      die();
    }
    
      $flashcard = Flashcard::where([
      ['category_id', '=', $catId],
      ['id', '=', $cardId]
      ])->first();

    $prev = Flashcard::where([
      ['category_id', '=', $catId],
      ['id', '<', $cardId]
    ])->orderBy('id', 'desc')->first();
      
    $next = Flashcard::where([
      ['category_id', '=', $catId],
      ['id', '>', $cardId]
    ])->first();

    return view('learn.by_category', compact('flashcard'))
      ->with('prev', $prev)
      ->with('next', $next);
  }

  public function setKnown($id)
  {
    $flashcard = Flashcard::find($id);
    $known = $flashcard->known;
    $flashcard->known = $known + 1;
    $flashcard->update();
  }
}