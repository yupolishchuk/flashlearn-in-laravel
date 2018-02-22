<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    public function index()
    {
        // $flashcards = Flashcard::latest()->get();
        // return view('flashcards.index', compact('flashcards'));
        return view('flashcards.index');
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

    public function update($id)
    {
        if (empty(request('question'))) {
            $flashcard = Flashcard::find($id);
        return view('flashcards.update', compact('flashcard'));
        } else {
            $flashcard = Flashcard::find($id);

            $flashcard->question = request('question');
            $flashcard->answer = request('answer');
    
            $flashcard->known = 1;
            $flashcard->category_id = 1;
            $flashcard->user_id = 1;
            $flashcard->update();
    
            return redirect('/');
        }
        
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

    public function delete($id)
    {
        $flashcard = Flashcard::find($id);
        $flashcard->delete();
        return redirect('/');
    }

    public function testRawQuery()
    {
        $flashcard = new Flashcard;
        $res = $flashcard->testRawQuery();
        dd($res);
    }
}