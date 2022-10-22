<?php

class MyTestCases extends TestCase
{
    public function testSampleTests()
    {
        $carpark = [[1, 0, 0, 0, 2],
            [0, 0, 0, 0, 0]];
        $result = ["L4", "D1", "R4"];

        $this->assertSame($result, escape($carpark), "Expected '" . (string)$result . "'");

        $carpark = [[2, 0, 0, 1, 0],
            [0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0]];
        $result = ["R3", "D2", "R1"];

        $this->assertSame($result, escape($carpark), "Expected '" . (string)$result . "'");

        $carpark = [[0, 2, 0, 0, 1],
            [0, 0, 0, 0, 1],
            [0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0]];
        $result = ["R3", "D3"];

        $this->assertSame($result, escape($carpark), "Expected '" . (string)$result . "'");

        $carpark = [[1, 0, 0, 0, 2],
            [0, 0, 0, 0, 1],
            [1, 0, 0, 0, 0],
            [0, 0, 0, 0, 0]];
        $result = ["L4", "D1", "R4", "D1", "L4", "D1", "R4"];

        $this->assertSame($result, escape($carpark), "Expected '" . (string)$result . "'");
    }
}
