<?php

/**
 * Definition for a binary tree node.
 */
class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;

     function __construct($val = 0, $left = null, $right = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
     }
 }

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if (empty($root)) {
            return 0;
        }

        $depth = 1;
        $nodes = array_filter([
            $root->left,
            $root->right,
        ]);

        $temp = [];

        while (!empty($nodes)) {
            foreach ($nodes as $node) {
                if (!is_null($node->left)) {
                    $temp[] = $node->left;
                }
                if (!is_null($node->right)) {
                    $temp[] = $node->right;
                }
            }
            $nodes = $temp;
            $temp = [];
            $depth++;
        }

        return $depth;
    }
}