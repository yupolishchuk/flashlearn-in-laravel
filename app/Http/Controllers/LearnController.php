<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminamte\Http\Request;

class LearnController extends Controller
{
  public function giveCard($cardId)
  {
    $flashcard = Flashcard::find($cardId);
    return view('learn.learn', compact('flashcard'));
  }

  public function giveNextCard($currentCard)
  {

  }
}