<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{

    public function leftChild()
    {
        return $this->belongsTo(Node::class, 'left_child');
    }

    public function rightChild()
    {
        return $this->belongsTo(Node::class, 'right_child');
    }

    public function parent()
    {
        return $this->hasOne(Node::class);
    }
}
