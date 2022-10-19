<?php

function isValidIP(string $str): bool
{
    $octets = explode('.', $str);
    if (count($octets) !== 4) {
        return false;
    }

    foreach ($octets as $octet) {
        $octetIsNumeric = is_numeric($octet);
        $octetIsValidNumber = (string)(int)$octet === $octet;
        $octetInRange = $octet >= 0 && $octet <= 255;

        if (!$octetIsNumeric || !$octetIsValidNumber || !$octetInRange) {
            return false;
        }
    }

    return true;
}

function bestPracticeIsValidIP(string $str): bool
{
    return filter_var($str, FILTER_VALIDATE_IP);
}

