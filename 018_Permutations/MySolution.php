<?php

function permutations(string $s): array {
    $permutations = [];
    $variations = [];

    createVariationsArray($variations, $s);
    getPermutations($permutations, $variations);

    return array_unique($permutations);
}

function createVariationsArray(array &$variations, string $s): void {
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        $variations[$char] = [];

        if (strlen($s > 1)) {
            $substring = substr($s, 0, $i) . substr($s, $i + 1);
            createVariationsArray($variations[$char], $substring);
        }
    }
}

function getPermutations(array &$permutations, array $variations, string $variation = ''): void {
    if (empty($variations)) {
        $permutations[] = $variation;
        return;
    }

    foreach ($variations as $char => $innerVariations) {
        getPermutations($permutations, $innerVariations, $variation . $char);
    }
}
