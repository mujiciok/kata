<?php

function sumOfDivided($lst) {
    if (empty($lst)) {
        return [];
    }

    $max = max(max($lst), abs(min($lst)));
    $primes = getPrimeNumbers($max);
    $result = [];

    foreach ($primes as $prime) {
        $dividedByPrime = [];
        foreach ($lst as $number) {
            if ($number % $prime === 0) {
                $dividedByPrime[] = $number;
            }
        }

        if (!empty($dividedByPrime)) {
            $result[] = [$prime, array_sum($dividedByPrime)];
        }
    }

    return $result;
}

function getPrimeNumbers(int $max) {
    $primes = [2, 3];
    for ($i = 3; $i <= $max; $i += 2) {
        if ($i % 6 !== 1 && $i % 6 !== 5) {
            continue;
        }

        $isPrime = true;
        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j === 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            $primes[] = $i;
        }
    }

    return $primes;
}
