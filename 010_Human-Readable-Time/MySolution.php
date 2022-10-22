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
