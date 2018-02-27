<?php
namespace App\Http\Controllers;

use App\Category;
use App\Flashcard;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        // $flashcard = Category::find(2)->flashcard;
        // dd($categories, $flashcard);
        foreach ($categories as $category) {
            //echo $category->id;
            $flashcards = Category::find($category->id)->flashcard;
            //echo count($flashcards) . '<br>';
            // каждой категории добавляем количество ее карт
            $category['flashcards'] = count($flashcards); 
        }
        
        //dd (compact('categories'));

        return view('categories.list', compact('categories'));
    }
}