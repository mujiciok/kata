<?php

class MyTestCase extends TestCase
{
    public function testBaseTests() {
        // assertEquals(mixed $expected, mixed $actual[, string $message = ''])
        $this->assertSame("FFFFFF", rgb(255, 255, 255));
        $this->assertSame("FFFFFF", rgb(255, 255, 300));
        $this->assertSame("000000", rgb(0,0,0));
        $this->assertSame("000000", rgb(-500,0,0));
        $this->assertSame("9400D3", rgb(148, 0, 211));
    }
}
