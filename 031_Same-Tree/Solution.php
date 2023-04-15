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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if ($p->val !== $q->val) {
            return false;
        }

        if ($this->isLastNode($p, $q)) {
            return true;
        }

        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }

    function isLastNode($p, $q) {
        return $p->left === null && $p->right === null && $q->left === null && $q->right === null;
    }
}