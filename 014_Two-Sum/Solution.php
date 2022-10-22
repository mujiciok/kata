<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $i => $n) {
            unset($nums[$i]);
            $si = array_search($target - $n, $nums);

            if ($si) {
                return [$i, $si];
            }
        }

        return [];
    }
}
