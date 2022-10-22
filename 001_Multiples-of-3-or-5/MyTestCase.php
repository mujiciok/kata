<?php

class MyTestCase extends TestCase
{
    public function testBasics() {
        $this->assertSame(23, solution(10));
    }
}
