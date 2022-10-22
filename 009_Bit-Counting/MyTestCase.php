<?php

class MyTestCase extends TestCase
{
    public function testResultCountBits() {
        $this->assertSame(countBits(0), 0);
        $this->assertSame(countBits(4), 1);
        $this->assertSame(countBits(7), 3);
        $this->assertSame(countBits(9), 2);
        $this->assertSame(countBits(10), 2);
    }
}
