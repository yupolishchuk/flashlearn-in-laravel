<?php
namespace App\Http\Controllers;

use App\NestedSetsTest;
use Illuminate\Http\Request;

class NestedSetsTestController extends Controller
{
    public function index()
    {
        // creating root node (without parents)
        // $root = NestedSetsTest::create(['name' => 'Root category']);
        
        $obj = new NestedSetsTest();
        $res = $obj->isValidNestedSet(); // проверяем целосность дерева

        // Создаем корневую ноду вызывая метод модели
        // $res = $obj->createRootNode();

        // $res = $obj::find(1);

        // Создаем потомка
        // $root = $obj::find(2);
        // $child1 = $root->children()->create(['name' => 'Child 2']);

        // Создаем потомка вызывая метод модели
        // $res = $obj->addChild();

        // dd($res);
        var_dump($res);
    }

    public function addNode()
    {

    }

    public function deleteNode()
    {

    }

    public function moveNode()
    {

    }
}