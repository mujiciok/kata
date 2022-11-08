<?php

class MyTestCase extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertSame($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(dblLinear(10), 22);
        $this->revTest(dblLinear(20), 57);
        $this->revTest(dblLinear(30), 91);
        $this->revTest(dblLinear(50), 175);
        $this->revTest(dblLinear(100), 447);
    }
}
