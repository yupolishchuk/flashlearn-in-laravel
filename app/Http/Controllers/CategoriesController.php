<?php
namespace App\Http\Controllers;

use App\FlashcardCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list()
    {
        $categories = FlashcardCategory::all();
        dd($categories);
    }
}