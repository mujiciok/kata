<?php

function escape($carpark)
{
    $path = [];

    $start = getStartPosition($carpark);
    $startFloor = $start['floor'];
    $position = $start['position'];
    if ($position === false) {
        return $path;
    }

    for ($i = $startFloor; $i < count($carpark); $i++) {
        $floorExit = findFloorExit($carpark[$i]);
        $exit = $floorExit['exit'];
        $isLastFloor = $floorExit['isLastFloor'];

        if ($position !== $exit) {
            moveSidewaysAndDown($path, $position, $exit, $isLastFloor);
        } else {
            moveDown($path, $isLastFloor);
        }

        $position = $exit;
    }

    return $path;
}

function getStartPosition($carpark)
{
    for ($i = 0; $i < count($carpark); $i++) {
        $position = array_search(2, $carpark[$i]);
        if ($position !== false) {
            break;
        }
    }

    return [
        'floor' => $i,
        'position' => $position
    ];
}

function findFloorExit($floor)
{
    $exit = array_search(1, $floor);
    $isLastFloor = $exit === false;

    return [
        'exit' => !$isLastFloor ? $exit : count($floor) - 1,
        'isLastFloor' => $isLastFloor,
    ];
}

function moveSidewaysAndDown(&$path, $position, $exit, $isLastFloor)
{
    $path[] = $position > $exit
        ? 'L' . ($position - $exit)
        : 'R' . ($exit - $position);
    if (!$isLastFloor) {
        $path[] = "D1";
    }
}

function moveDown(&$path, $isLastFloor)
{
    $lastMoveIndex = count($path) - 1;
    $previousMove = $path[$lastMoveIndex];

    if ($previousMove[0] === 'D') {
        $downFloors = (int)substr($previousMove, 1);
        if (!$isLastFloor) {
            $downFloors++;
        }
        $path[$lastMoveIndex] = 'D' . $downFloors;
    }
}
