<?php

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCase extends TestCase
{
    // test function names should start with "test"
    public function testBasics() {
        $this->assertSame(1000, solution("M"));
        $this->assertSame(50, solution("L"));
        $this->assertSame(4, solution("IV"));
    }

    public function testComplex() {
        $this->assertSame(2017, solution("MMXVII"));
        $this->assertSame(1337, solution("MCCCXXXVII"));
    }
}
