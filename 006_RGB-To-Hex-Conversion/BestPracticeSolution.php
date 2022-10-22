<?php

function bestPractice_rgb($r,$g,$b){
    return sprintf("%02X%02X%02X", checkValue($r), checkValue($g), checkValue($b));
}

function checkValue($value){
    return $value > 255 ? 255 : ($value < 0 ? 0 : $value);
}
