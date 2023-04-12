<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        // convert each list to a number
        $n1 = strrev(self::toString($l1));
        $n2 = strrev(self::toString($l2));

        // calculate the sum
        $sum = bcadd($n1, $n2);

        // convert the sum to a list
        return self::toList($sum);
    }

    static function toString(ListNode $l): string
    {
        $string = '';

        while ($l) {
            $string .= $l->val;
            $l = $l->next;
        }

        return $string;
    }

    static function toList(string $s): ListNode
    {
        if ($s === '0') {
            return new ListNode(0);
        }

        $list = null;

        while ($s !== '') {
            $list = new ListNode($s[0], $list);
            $s = substr($s, 1);
        }

        return $list;
    }
}