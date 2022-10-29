<?php

function permutations(string $str): array
{
    if (strlen($str) < 2) {
        return [$str];
    }

    $result = [];
    $stop = strlen($str) - 1;
    for ($i = 0; $i <= $stop; $i++) {
        $substr = substr($str, 0, $i) . substr($str, $i + 1);
        foreach (permutations($substr) as $per) {
            $result[] = $str[$i] . $per;
        }
    }
    return array_unique($result);
}
