<?php


namespace App;


class BinaryTree
{
    public function traverse(Node $node, $arr = null)
    {
        $arr['name'] = "{$node->username} cl:{$node->credits_left} cr:{$node->credits_right}";

            if ($node->leftChild) {
                $arr['children'][] = $this->traverse($node->leftChild()->first());
            }

            if ($node->rightChild) {
                $arr['children'][] = $this->traverse($node->rightChild()->first());
            }

        return $arr;
    }
}