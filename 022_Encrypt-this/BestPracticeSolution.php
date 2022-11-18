<?php

function encryptThis($text): string {
    return preg_replace_callback('/\b\w(\w?)(\w*?)(\w?)\b/', fn($m) => ord($m[0]).$m[3].$m[2].$m[1], $text);
}
