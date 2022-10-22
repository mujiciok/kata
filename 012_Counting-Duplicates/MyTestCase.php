<?php

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testFixedTests()
    {
        $this->assertSame(0, duplicateCount(""));
        $this->assertSame(0, duplicateCount("abcde"));
        $this->assertSame(2, duplicateCount("aabbcde"));
        $this->assertSame(2, duplicateCount("aabBcde"), "should ignore case");
        $this->assertSame(1, duplicateCount("Indivisibility"));
        $this->assertSame(2, duplicateCount("Indivisibilities"), "characters may not be adjacent");
    }
}
