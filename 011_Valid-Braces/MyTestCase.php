<?php

class MyTestCase extends TestCase
{
    public function testSamples() {
        $this->assertSame(true, validBraces("()"));
        $this->assertSame(false, validBraces("[(])"));
    }
}
