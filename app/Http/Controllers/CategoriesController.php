<?php
namespace App\Http\Controllers;

use App\Category;
use App\Flashcard;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Show categories list
    // добавить отображение вложенности категорий, и количества карт принадлежащих каждой категории
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

    public function nestedlist()
    {
        return view('categories.nestedlist');
    }

    // Возвращаем json на ajax request
    public function givenestedlist()
    {
        // Возвращаем все дерево данных выбранной ноды в виде объекта 
        // $tree = Category::where('id', '=', '1')->first()->getDescendantsAndSelf()->toHierarchy();


        // в pluck / select задаем поля, которые хотим выбрать
        // $tree = Category::where('id', '=', '1')->pluck('id', 'name');
        $tree = Category::where('id', '=', '1')
                        ->first()
                        ->getDescendantsAndSelf(array('id', 'parent_id', 'name'))
                        ->toHierarchy();

        // echo '<pre>';
        // print_r($tree);
        // print_r(json_encode($tree));
        // echo '<pre>';

        return (compact('tree'));
    }

    public function create()
    {
        // Category::create(['name' => 'Root category']); //создаем корневую категорию

        // создаем  потомка
        // $root = Category::find(1);
        // $child = $root->children()->create(['name' => 'Child3']);
    }

    public function move()
    {
        
    }
}