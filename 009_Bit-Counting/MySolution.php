<?php

function countBits($n)
{
    return strlen(preg_replace('/0/', '', decbin($n)));
}
