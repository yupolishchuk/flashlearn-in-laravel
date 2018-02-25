<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        //dd($categories);
        return view('categories.list', compact('categories'));
    }
}