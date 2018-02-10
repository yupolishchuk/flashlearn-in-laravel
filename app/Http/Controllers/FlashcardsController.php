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
        die('flashcard create');
        return view('flashcards.create');
    }


}