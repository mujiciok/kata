<?php

function human_readable($seconds)
{
    $ss = $seconds % 60;
    $mm = floor($seconds / 60) % 60;
    $hh = floor($seconds / 60 / 60);

    return sprintf(
        '%s:%s:%s',
        str_pad($hh, 2, '0', STR_PAD_LEFT),
        str_pad($mm, 2, '0', STR_PAD_LEFT),
        str_pad($ss, 2, '0', STR_PAD_LEFT)
    );
}

function bestPractice_human_readable(int $seconds): string
{
    return sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
}
