<?php

function escape($carpark)
{
    $parkingEscape = new ParkingEscape($carpark);
    return $parkingEscape->findExit();
}

class ParkingEscape
{
    protected $countOfFloors = 0;
    protected $currentFloor = 0;
    protected $levels = [];
    protected $path = [];
    protected $stairsPos = 0;

    /**
     * Filling in the initial values
     *
     * @param array $levels - List of floors
     */
    public function __construct($levels)
    {
        $this->cutOverFloors($levels);
        $this->countOfFloors = $this->currentFloor = count($levels) - 1;
        $this->levels = $levels;
        $this->stairsPos = array_search(2, $this->getCurrentFloor());
    }

    /**
     * The main loop in the program
     * Finding the exit from the parking lot
     *
     * @return array - List of moves to exit
     */
    public function findExit()
    {
        while (1) {
            if ($this->currentFloor) {
                array_push($this->path, $this->findDirection() . $this->findDifference());
                array_push($this->path, $this->findStairs());
            } else {
                $exitPos = count($this->getCurrentFloor()) - 1 - $this->stairsPos;

                if ($exitPos) {
                    array_push($this->path, 'R' . $exitPos);
                }

                return $this->path;
            }
        }
    }

    /**
     * Finding the direction according to the current position of the car and the position of the exit
     *
     * @return string - 'R' or 'L' direction
     */
    protected function findDirection()
    {
        return array_search(1, $this->getCurrentFloor()) > $this->stairsPos ? 'R' : 'L';
    }

    /**
     * Finding the difference between the current position of the car and the stairs to the next floor
     *
     * @return int - Count of park places to next floor
     */
    protected function findDifference()
    {
        return abs(array_search(1, $this->getCurrentFloor()) - $this->stairsPos);
    }

    /**
     * Finding the number of steps on the current position of the car and all floors with a stairs of this position
     *
     * @return string - Count of stairs with 'D' direction
     */
    protected function findStairs()
    {
        $count = $pos = 0;

        while (!$count || $pos === array_search(1, $this->getCurrentFloor())) {
            $pos = array_search(1, $this->getCurrentFloor());
            $this->currentFloor--;
            $count++;
        }

        $this->stairsPos = $pos;

        return 'D' . $count;
    }

    /**
     * Getting the current settings of the floor array by the current floor
     *
     * @return array - Current floor
     */
    protected function getCurrentFloor()
    {
        return $this->levels[$this->countOfFloors - $this->currentFloor];
    }

    /**
     * Removes upper floors
     *
     * @param array $levels - List of floors
     */
    protected function cutOverFloors(&$levels)
    {
        $find = false;

        $levels = array_values(array_filter($levels, function ($item) use (&$find) {

            if ($find || array_search(2, $item) !== false) {
                $res = 1;
                $find = true;
            } else {
                $res = 0;
            }
            return $res;
        }));
    }
}
