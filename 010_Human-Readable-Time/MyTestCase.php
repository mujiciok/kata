<?php

class MyTestCase
{
    public function testBasicTests()
    {
        $this->assertSame('00:00:00', human_readable(0));
        $this->assertSame('00:00:05', human_readable(5));
        $this->assertSame('00:01:00', human_readable(60));
        $this->assertSame('23:59:59', human_readable(86399));
        $this->assertSame('99:59:59', human_readable(359999));
    }
}
