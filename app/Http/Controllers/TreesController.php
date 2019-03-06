<?php

namespace App\Http\Controllers;

use App\BinaryTree;
use App\Node;
use Illuminate\Http\Request;

class TreesController extends Controller
{
    public function show()
    {
        $tree = new BinaryTree();

        return $tree->traverse(Node::first());
    }
}
