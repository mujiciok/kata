<?php

function sumOfDivided($lst) {
    $result = [];
    foreach ($lst as $number) {
        for ($i = 2; $i <= abs($number); $i++) {
            if ($number % $i == 0) {
                $prime = true;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $prime = false;
                        break;
                    }
                }
                if ($prime) $result[$i] = isset($result[$i]) ? $result[$i]+$number : $number;
            }
        }
    }

    ksort($result);
    return array_map(function($k, $v){
        return [$k, $v];
    }, array_keys($result), array_values($result));
}
