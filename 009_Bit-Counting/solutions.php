<?php

function countBits($n)
{
    return strlen(preg_replace('/0/', '', decbin($n)));
}

function bestSolution_countBits($n)
{
    return substr_count(decbin($n), 1);
}
