<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminamte\Http\Request;

class LearnController extends Controller
{
  public function giveCard($cardId)
  {
    $flashcard = Flashcard::find($cardId);
    $prev = Flashcard::where('id', '<', $cardId)->orderBy('id', 'desc')->first();// это можно сделать рациональнее?
    $next = Flashcard::where('id', '>', $cardId)->first();
    return view('learn.learn', compact('flashcard'))
      ->with('next', $next)
      ->with('prev', $prev);
  }
}