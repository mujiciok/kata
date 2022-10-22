<?php

function human_readable(int $seconds): string
{
    return sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
}
