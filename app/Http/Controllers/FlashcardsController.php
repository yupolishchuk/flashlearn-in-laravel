<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    public function index()
    {

        echo 'Flashcards controller index';
        // $flashcards = Flashcard::latest()->get();
        // return view('flashcards.index', compact('flashcards'));
    }

    public function show($id)
    {
        $flashcard = Flashcard::find($id);

        //dd($flashcard);
        //dd(compact('flashcard'));
        return view('flashcards.show');
    }


}