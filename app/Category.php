<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Flashcard;
use Baum\Node;

class Category extends Node
{
    protected $table = 'categories';
    protected $parentColumn = 'parent_id';
    protected $leftColumn = 'lft';
    protected $rightColumn = 'rgt';
    protected $depthColumn = 'depth';
    protected $orderColumn = null;

    /**
    * With Baum, all NestedSet-related fields are guarded from mass-assignment
    * by default.
    *
    * @var array
    */
    protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');

    public function flashcard()
    {
        return $this->hasMany('App\Flashcard'); //допустим связь один к одному (на самом деле неправильно)
    }
}