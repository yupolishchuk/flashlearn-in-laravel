<?php
namespace App\Http\Controllers;

use App\Flashcard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    
}