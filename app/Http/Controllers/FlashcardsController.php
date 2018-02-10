<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    public function index()
    {
        // решить что будет на главной странице
        echo 'Flashcards controller index';
        // $flashcards = Flashcard::latest()->get();
        // return view('flashcards.index', compact('flashcards'));
    }

    public function show($id)
    {
        $flashcard = Flashcard::find($id);
        return view('flashcards.show', compact('flashcard'));
    }

    public function create()
    {
        return view('flashcards.create');
    }

    // POST /flashcards
    public function store()
    {
        //dd(request()->all());
        $flashcard = new \App\Flashcard;

        $flashcard->question = request('question');
        $flashcard->answer = request('answer');
        
        $flashcard->known = 1;
        $flashcard->category_id = 1;
        $flashcard->user_id = 1;
        $flashcard->save();

        return redirect('/');
    }
}